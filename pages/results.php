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
include_once("ExhibitionClass.php");

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
	###End Formbuilder Code
	function EditLink(){
    	return AddButton("Class ".$this->ClassNumber,"?action=edit&id=".$this->ID."#form");
    }
    
    function PrintList(){
	PEARError($prize=DB_DataObject::factory("Prize"));
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
        print "<div style='float: left;' id='jqxTabs'>";
        PEARError($sec_l=DB_DataObject::factory("ExhibitionSection"));
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
        
        PEARError($sec=DB_DataObject::factory("ExhibitionSection"));
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
                        try {
                            $doResults->getLinks();
                            $results[$doResults->PrizeID]=$doResults->_ExhibitionExhibitorID->ExhibitorNumber;
                        } catch (Exception $e){}                        
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
    
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
        
        dbRoot::showPage("Results");		
		
}
?>