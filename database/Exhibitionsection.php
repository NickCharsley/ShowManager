<?php
/**
 * Table Definition for exhibitionsection
 */
require_once 'dbRoot.php';

class doExhibitionsection extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitionsection';    // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionID;                    // int(4)  unique_key not_null
    public $SectionNumber;                   // varchar(20)  unique_key not_null
    public $SectionID;                       // int(4)  unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_formHeaderText="Section";
    public $fb_userEditableFields=array("ID","SectionNumber","SectionID");
    public $fb_fieldLabels=array("ExhibitionID"=>"Show","SectionID"=>"Section");
    public $fb_linkNewValue=true;
    public $fb_linkDisplayFields=array("SectionNumber");
    ###End Formbuilder Code
    
    function SectionName(){
        return dbRoot::fromCache("Section", $this->SectionID)->Name;
    }

    
    function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID);
    }
    
    function gatherExportDataObjects(&$ret,$Exhibitors){
        if (parent::gatherExportDataObjects($ret,$Exhibitors)){
            //Now Add Children
            //Exhibition
            $doE=dbRoot::fromCache("Exhibition",$this->ExhibitionID);
            $doE->gatherExportDataObjects($ret,$Exhibitors);        
            //Section
            $doS=dbRoot::fromCache("Section",$this->SectionID);
            $doS->gatherExportDataObjects($ret,$Exhibitors);        
        }
    }

    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //Exhibition Section Found by Section Number and Exhibition ID
            $this->SectionNumber=dbRoot::getObjectValue("SectionNumber", $object);
            $this->ExhibitionID=dbRoot::importMap("Exhibition", dbRoot::getObjectValue("ExhibitionID", $object));
            if ($this->find(true)){
                //Need to check data
                diehere();
            } else {
                //Now Need to Get Data....
                $SectionID=dbRoot::getObjectValue("SectionID", $object);
                if (dbRoot::importMap("Section",$SectionID)==0){
                    $map=dbRoot::getImportMap("Section", $SectionID);                    
                    $map['do']->ImportObject($map['data'],$SectionID,$Exhibitors);
                }                                        
                $this->SectionID=dbRoot::importMap("Section",$SectionID);
                
                $this->insert();
                $this->find(true);
            }
            dbRoot::addToCache($this);
            dbRoot::importMap($this->__table,$key,$this->ID);
        }
    }
    
    function PrintList(){
    	$list=clone($this);
        $list->orderBy("SectionNumber*1,SectionNumber");
    	$list->find();
    	print "<table>\n";
    	while ($list->fetch()){
    		$list->getLinks();
    		//print_pre($list);
    		print "<tr>\n";
    		print "<td>\n";
    		print "Section ".$list->SectionNumber.": " ;
    		print $list->_SectionID->Name;
    		print "</td>\n";
    		print "<td>\n";
    		print $list->EditLink();
    		print "</td>\n";
    		print "</tr>\n";
    	}
    	print "</table>\n";    	 
    }
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
		
	dbRoot::showPage("ExhibitionSection");
}
?>