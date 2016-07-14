<?php
/*
 * File results.php
 * Created on 20 Aug 2009 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2009 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('ons_common.php');
 error_log("Enter", E_USER_NOTICE);
//************************************************
include_once("Exhibitionclass.php");

class doResults extends doExhibitionClass {
    ###Formbuilder Code
    public $fb_formHeaderText="Results";
    public $fb_userEditableFields=array("ID","__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID");
    public $fb_fieldLabels=array("__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID"=>"Prizes","ExhibitionID"=>"Show","ExhibitionSectionID"=>"Section","ClassID"=>"Class");
    public $fb_crossLinks=array(array("table"=>"exhibitionclassprize",
                                        "fromField"=>"ExhibitionClassID",
                                        "toField"=>"PrizeID"
                                       )
                         );

    function printForm(){
    }

        
    function processForm($values){
        //Process data...
        foreach ($values['prize'] as $ClassID=>$prizes){
            foreach ($prizes as $PrizeID=>$ExhibitorNumber){
                $doP=dbRoot::fromCache("Prize", $PrizeID);

                $doECP=safe_dataobject_factory("ExhibitionClassPrize");
                $doEE=safe_dataobject_factory("DefaultExhibitionExhibitor");
                $doEE->ExhibitorNumber=$ExhibitorNumber;
                
                $ExhibitorID=$doEE->find(true)?$doEE->ID:'null';                    

                $doECP->ExhibitionClassID=$ClassID;
                $doECP->PrizeID=$PrizeID;
                $action=$doECP->find(true)?'update':'insert';
                $doOld=clone($doECP);
                $doECP->ExhibitionExhibitorID=$ExhibitorID;
                $doECP->Points=$doP->Points;
                $doECP->Prize=$doP->Prize;
                $doECP->$action($doOld);                
                
//                krumo($doECP);
            }
        }
//        krumo($values);
        //diehere();
    }
/** /        
    function processFormOld($values){
        //krumo($this);
        //krumo($values);
        if (isset($values['__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID'])){
            foreach ($values['__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID'] as $prize){
                $doP=dbRoot::fromCache("Prize", $prize);
                $ExhibitorID=$values['__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID__'.$prize.'_ExhibitionExhibitorID_'];
                if ($ExhibitorID>0){
                    $doECP=safe_dataobject_factory("ExhibitionClassPrize");

                    $doECP->ExhibitionClassID=$values['ID'];
                    $doECP->PrizeID=$prize;
                    $action=$doECP->find(true)?'update':'insert';
                    $doOld=clone($doECP);
                    $doECP->ExhibitionExhibitorID=$ExhibitorID;
                    $doECP->Points=$doP->Points;
                    $doECP->Prize=$doP->Prize;
                    $doECP->$action($doOld);
                    //krumo($doECP);
                }
            }
        }
        //diehere();
    }        
/**/    
	###End Formbuilder Code
    function EditLink(){
    	return AddButton("Class ".$this->ClassNumber,"?action=edit&id=".$this->ID."#form");
    }
    
    function printPage(){
        if (PageTitle()){
            $this->UpdateDefaults();
            $this->printHeader();
            $this->PrintForm();
            $this->PrintList();
            $this->Footer();
        }            
    }
    
    function prizeForm($ID){

        $doResults=safe_dataobject_factory("ExhibitionClassPrize");
        $doResults->ExhibitionClassID=$ID;
        $doResults->find();                    
        

        $doResults->find();                    
        while ($doResults->fetch()){
            if (isset($doResults->ExhibitionExhibitorID)) {
                $doResults->getLinks();
                $results[$doResults->PrizeID]=$doResults->_ExhibitionExhibitorID->ExhibitorNumber;
            }                       
        }    

        $prize = new HTML_QuickForm("form_ExhibitionClassID_$ID", 'post');        
        $renderer =& $prize->defaultRenderer();
        

        
        $results=array(
              '1' => '-',
              '2' => '-',
              '3' => '-',
        );
        
        $prize->setDefaults($results);
        
        $prize->addElement('text', '1', '',array('size' => 12, 'maxlength' => 12));
        $prize->addElement('text', '2', '',array('size' => 12, 'maxlength' => 12));
        $prize->addElement('text', '3', '',array('size' => 12, 'maxlength' => 12));
        $prize->addElement('submit', 'btnSubmit', 'Update');
        
        if ($prize->validate()) {
            $prize->process(array($this,'process'), true);
        }
        else {
            //$prize->accept($renderer);        
            return $prize->toHtml();
        }
    }
    
    function checkNotEmpty($values){
        return !(trim($values==''));
    }
    
    function checkValidExhibitor($values){
        if (trim($values=='-')) return true;//Is always valid
        
        foreach (split(',', $values) as $value) {
            //krumo($value);
            $doEE=safe_dataobject_factory("DefaultExhibitionExhibitor");
            $doEE->ExhibitorNumber=$value;
            if ($doEE->find()==0){
                return false;
            }
            //$doEE->find(true);
            //krumo($doEE);
        }
        return true;                    
    }
    
    function PrintList(){
	PEARError($prize=Safe_DataObject_factory("Prize"));
	$prize->find();
        $title="";
	while($prize->fetch()){
		$title.="<td>".$prize->Name."</td>";
	}
        $list=clone($this);
        print "<script type='text/javascript'>
        $(document).ready(function () {
            
            var index = $.jqx.cookie.cookie('jqxTabs_jqxWidget');
            if (undefined == index) index = 0;
            $('#jqxTabs').jqxTabs({selectedItem: index, width: 1000 });
            // on to the select event.
            $('#jqxTabs').on('selected', function (event) {
                // save the index in cookie.
                $.jqx.cookie.cookie('jqxTabs_jqxWidget', event.args.item);
            });
        });
    </script>";
        
        print "<div id='jqxWidget'>";
        print "<div style='float: left;' id='jqxTabs'>";
        PEARError($sec_l=Safe_DataObject_factory("ExhibitionSection"));
        $sec_l->ExhibitionID=$list->ExhibitionID;
	$sec_l->orderBy("SectionNumber*1,SectionNumber");   
	$sec_l->find();
        print '<ul>'."\n";
        while ($sec_l->fetch()){
            $sec_l->getLinks();
            print '<li>';
            print "Section ".$sec_l->SectionNumber.": " ;
            print $sec_l->_SectionID->Name;
            print '</li>';
        }
        print "</ul>\n";        
        
        $defaults=array();
        
        PEARError($sec=Safe_DataObject_factory("ExhibitionSection"));
	$sec->ExhibitionID=$list->ExhibitionID;
	$sec->orderBy("SectionNumber*1,SectionNumber");   
	$sec->find();
	while ($sec->fetch()){
            $sec->getLinks();
            $ID=$sec->ID;
                    
            print '<div>';            
            $prize = new HTML_QuickForm("form_ExhibitionClassID_$ID", 'post');        
            $prize->registerRule('NotEmpty','callback','checkNotEmpty',$this);
            $prize->registerRule('ValidExhibitor','callback','checkValidExhibitor',$this);
            $renderer =& $prize->defaultRenderer();
    
            //$renderer->setFormTemplate("\n<form{attributes}>\n<table border=\"1\">\n{content}\n</table>\n</form>");
            $renderer->setElementTemplate(
                      "\n\t<tr>\n\t\t"
                    . "<td align=\"right\" valign=\"top\">"
                    . "<!-- BEGIN required --><span style=\"color: #ff0000\">*</span><!-- END required -->"
                    . "<b>{label}</b></td>\n\t\t"
                    . "<td valign=\"top\" align=\"left\">"
                    . "\t{element}</td>"
                    //Put Error onto seperate row
                    . "<!-- BEGIN error --><tr><td colspan=\"5\" align=\"right\">"
                    . "<span style=\"color: #ff0000\">{error}</span>"
                    . "</td></tr><!-- END error -->"
                    . "\n\t</tr>"
                );

            $prize->addElement('header', null, "Section ".$sec->SectionNumber.": ".$sec->_SectionID->Name);
            $list=clone($this);
            $list->ExhibitionSectionID=$ID;
            $list->orderBy("ClassNumber*1,ClassNumber");
            $list->find();                        
/**/            
            //Add Rules
            //3) Exhibitor not in row more than once

            while ($list->fetch()){
                
                $list->getLinks();
                //$group[] =& HTML_QuickForm::createElement('static', null, "Class ".$list->ClassNumber);
                $name ="Class ".$list->ClassNumber."</td><td>";
                $name.=$list->_ClassID->Name;
                if (strlen($list->_ClassID->Description)>0) {
                        $name.=" (".$list->_ClassID->Description.")";
                }
                
                unset($group);
                $group[] =& HTML_QuickForm::createElement('text', '1', '',array('size' => 12, 'maxlength' => 12));
                $group[] =& HTML_QuickForm::createElement('text', '2', '',array('size' => 12, 'maxlength' => 12));
                $group[] =& HTML_QuickForm::createElement('text', '3', '',array('size' => 12, 'maxlength' => 12));

                $prize->addGroup($group, 'prize['.$list->ID.']', $name, "</td><td align=\"right\" valign=\"top\">");                                
            //0) Something is required in each box
                //$prize->addGroupRule('prize['.$list->ID.']', 'Use - to represent unawarded prizes', 'NotEmpty');
            //1) Regex - or number[,number[,number]]
                $prize->addGroupRule('prize['.$list->ID.']', 'Exhibitor Number must be numeric or -', 'regex','/^[\-0-9,]*$/');
                $prize->addGroupRule('prize['.$list->ID.']', 'Maximum of Three Exhibitor Numbers in One Box', 'regex','/^-$|^[0-9]*$|^[0-9]*,[0-9]*$|^[0-9]*,[0-9]*,[0-9]*$/');
            //2) If a number is for a valid Exhibitor
                $prize->addGroupRule('prize['.$list->ID.']', 'Check Exhibitor Numbers', 'ValidExhibitor');
     
                $defaults= array_merge($defaults, $this->getDefaults($list->ID));
            }
            
            $prize->addElement('submit', 'btnSubmit', 'Update');             
            $prize->setDefaults($defaults);

            if ($prize->validate()) {
                //DB_DataObject::debugLevel(5);
                $prize->process(array(&$this,'processForm'), false);
            }

            
            print $prize->toHtml();            
            print "</div>\n";
        }
        print "</div>\n";
        print "</div>\n";
    }

    private function getDefaults($ClassID){
        $defaults['prize['.$ClassID.'][1]']='-';
        $defaults['prize['.$ClassID.'][2]']='-';
        $defaults['prize['.$ClassID.'][3]']='-';

        $doResults=safe_dataobject_factory("ExhibitionClassPrize");
        $doResults->ExhibitionClassID=$ClassID;
        $doResults->find();                    

        $doResults->find();                    
        while ($doResults->fetch()){
            if (isset($doResults->ExhibitionExhibitorID)) {
                $doResults->getLinks();
                $defaults['prize['.$ClassID.']['.$doResults->PrizeID.']']=$doResults->_ExhibitionExhibitorID->ExhibitorNumber;
            }                       
        }    
        return $defaults;
    }
/** /    
    function PrintListOld(){
	PEARError($prize=Safe_DataObject_factory("Prize"));
	$prize->find();
        $title="";
	while($prize->fetch()){
		$title.="<td>".$prize->Name."</td>";
	}
        $list=clone($this);
        print "<script type='text/javascript'>
        $(document).ready(function () {
            
            var index = $.jqx.cookie.cookie('jqxTabs_jqxWidget');
            if (undefined == index) index = 0;
            $('#jqxTabs').jqxTabs({selectedItem: index, width: 900 });
            // on to the select event.
            $('#jqxTabs').on('selected', function (event) {
                // save the index in cookie.
                $.jqx.cookie.cookie('jqxTabs_jqxWidget', event.args.item);
            });
        });
    </script>";
        
        print "<div id='jqxWidget'>";
        print "<div style='float: right;' id='jqxTabs'>";
        PEARError($sec_l=Safe_DataObject_factory("ExhibitionSection"));
        $sec_l->ExhibitionID=$list->ExhibitionID;
	$sec_l->orderBy("SectionNumber*1,SectionNumber");   
	$sec_l->find();
        print '<ul>'."\n";
        while ($sec_l->fetch()){
            $sec_l->getLinks();
            print '<li>';
            print "Section ".$sec_l->SectionNumber.": " ;
            print $sec_l->_SectionID->Name;
            print '</li>';
        }
        print "</ul>\n";        
        
        PEARError($sec=Safe_DataObject_factory("ExhibitionSection"));
	$sec->ExhibitionID=$list->ExhibitionID;
	$sec->orderBy("SectionNumber*1,SectionNumber");   
	$sec->find();
	while ($sec->fetch()){
            print '<div>';
            print "<table border='1' width='100%'>\n";
            $sec->getLinks();
            print "<tr>\n";
                print "<td colspan='2'>\n";
                    print "Section ".$sec->SectionNumber.": " ;
                    print $sec->_SectionID->Name;
                print "</td>\n";
                print $title;
            print "</tr>\n";

            $list=clone($this);
            $list->ExhibitionSectionID=$sec->ID;
            $list->orderBy("ClassNumber*1,ClassNumber");
            $list->find();
            while ($list->fetch()){
                $list->getLinks();
                print "<tr>\n";
                    print "<td width='150px'>\n";
                        print "&nbsp;".$list->EditLink();
                    print "</td>\n";
                    print "<td>\n";
                        print $list->_ClassID->Name;
                        if (strlen($list->_ClassID->Description)>0)
                            print " (".$list->_ClassID->Description.")";
                    print "</td>\n";
                    $results=array(1=>"-",2=>"-",3=>"-");
                    $doResults=safe_dataobject_factory("ExhibitionClassPrize");
                    $doResults->ExhibitionClassID=$list->ID;
                    $doResults->find();
                    while ($doResults->fetch()){
                        if (isset($doResults->ExhibitionExhibitorID)) {
                            $doResults->getLinks();
                            $results[$doResults->PrizeID]=$doResults->_ExhibitionExhibitorID->ExhibitorNumber;
                        }                       
                    }    
                    
                    foreach($results as $place){
                        print "<td width='60px'>$place</td>";
                    }
                    print "</tr>\n";
            }
            print "</table>\n";
            print "</div>\n";
        }
        print "</div>\n";
        print "</div>\n";
    }
/** /
    function printFormOld(){
        $doForm=clone($this);

        if (isset($_GET['action']) and isset($_GET['id'])){
                $doForm->get($_GET['id']);
                if ($_GET['action']<>'edit')
                        $doForm=clone($this);
        }

        $fbForm =&DB_DataObject_FormBuilder::create($doForm);
        $form =& $fbForm->getForm();
        $this->form=$fbForm;
        if ($form->validate()) {
                //DB_DataObject::debugLevel(5);
                $form->process(array(&$this,'processForm'), false);
                $form->freeze();
        }
        print "<div style='float: left;'>";
        print AddButton("New","?action=new#form");
        print "<br/><br/><hr/>";
        $form->display();
        print "<hr/>";
        print "</div>";
    }
/**/  
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
        
        dbRoot::showPage("Results");		
		
}
?>