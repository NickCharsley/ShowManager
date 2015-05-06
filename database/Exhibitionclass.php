<?php
/**
 * Table Definition for exhibitionclass
 */
require_once 'dbRoot.php';

class doExhibitionclass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitionclass';     // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionID;                    // int(4)  unique_key not_null
    public $ExhibitionSectionID;             // int(4)  unique_key not_null
    public $ClassNumber;                     // varchar(10)  unique_key not_null
    public $ClassID;                         // int(4)  unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_formHeaderText="Class";
    public $fb_userEditableFields=array("ID","ExhibitionSectionID","ClassNumber","ClassID");
    public $fb_fieldLabels=array("ExhibitionID"=>"Show","ExhibitionSectionID"=>"Section","ClassID"=>"Class");
    public $fb_linkNewValue=array("ClassID");
    public $fb_linkDisplayLevel=2;
    public $fb_linkDisplayFields=array("ExhibitionID","ExhibitionSectionID","ClassID");

    ###End Formbuilder Code
    
    function SectionName(){
        return dbRoot::fromCache("ExhibitionSection", $this->ExhibitionSectionID)->SectionName();
    }
      
    function ClassName(){
        return dbRoot::fromCache("Class",$this->ClassID)->Name;
    }
    
    function ClassDescription(){
        return dbRoot::fromCache("Class",$this->ClassID)->Description;
    }
    
    
    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //Exhibition Class Found by Class Number and Exhibition ID
            $this->ClassNumber=dbRoot::getObjectValue("ClassNumber", $object);
            $this->ExhibitionID=dbRoot::importMap("Exhibition", dbRoot::getObjectValue("ExhibitionID", $object));
            if ($this->find(true)){
                //Need to check data
                diehere();
            } else {
                //Now Need to Get Data....
                $ClassID=dbRoot::getObjectValue("ClassID", $object);
                if (dbRoot::importMap("Class",$ClassID)==0){
                    $map=dbRoot::getImportMap("Class", $ClassID);                    
                    $map['do']->ImportObject($map['data'],$ClassID,$Exhibitors);
                }                                        
                $this->ClassID=dbRoot::importMap("Class",$ClassID);
                
                $ExhibitionSectionID=dbRoot::getObjectValue("ExhibitionSectionID", $object);
                if (dbRoot::importMap("ExhibitionSection",$ExhibitionSectionID)==0){
                    $map=dbRoot::getImportMap("ExhibitionSection", $ExhibitionSectionID);                    
                    $map['do']->ImportObject($map['data'],$ExhibitionSectionID,$Exhibitors);
                }                                        
                $this->ExhibitionSectionID=dbRoot::importMap("ExhibitionSection",$ExhibitionSectionID);                

                $this->insert();
                $this->find(true);
            }
            dbRoot::addToCache($this);
            dbRoot::importMap($this->__table,$key,$this->ID);
        }
    }
        
        
    function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID."#form");
    }
    
    private function getChildren($child,&$ret,$Exhibitors=false){
        $doC=safe_dataobject_factory($child);
        $doC->ExhibitionClassID=$this->ID;
        $doC->find();
        while ($doC->fetch()){
            $doC->gatherExportDataObjects($ret,$Exhibitors);
        }        
    }
    
    function gatherExportDataObjects(&$ret,$Exhibitors=false){
        if (parent::gatherExportDataObjects($ret,$Exhibitors)){
            //Now Add Children
            //ExhibitionClassPrize
            $this->getChildren("ExhibitionClassPrize", $ret,$Exhibitors);
            //Exhibition
            $doE=dbRoot::fromCache("Exhibition",$this->ExhibitionID);
            $doE->gatherExportDataObjects($ret,$Exhibitors);
            //ExhibitionSection
            $doES=dbRoot::fromCache("ExhibitionSection",$this->ExhibitionSectionID);
            $doES->gatherExportDataObjects($ret,$Exhibitors);
            //Class
            $doC=dbRoot::fromCache("Class",$this->ClassID);
            $doC->gatherExportDataObjects($ret,$Exhibitors);
        }
    }

    
    function PrintList(){
    	$list=clone($this);
    	$table=array();
    	 
    	//Need to add Empty Sections
    	$section=safe_dataobject_factory("ExhibitionSection");
    	$section->ExhibitionID=$list->ExhibitionID;
    	$section->orderBy("SectionNumber*1,SectionNumber");
    	$section->find();
    	while ($section->fetch()){
    		$section->getLinks();
    		$table[$section->SectionNumber][0]="<tr>\n<td colspan='3'>\n"
    		."Section ".$section->SectionNumber
    		.": ".$section->_SectionID->Name
    		."\n</td>\n</tr>";    	
    	}    	 
    	
    	$list->orderBy("ClassNumber*1,ClassNumber");    	
    	$list->find();
    	while ($list->fetch()){    		
    		$list->getLinks();
    		$table[$list->_ExhibitionSectionID->SectionNumber][$list->ClassNumber]="<tr>\n<td>&nbsp;</td>\n<td>\n"
      																					."Class ".$list->ClassNumber.": "
    																					.$list->_ClassID->Name
    																					.(strlen($list->_ClassID->Description)>0?" (".$list->_ClassID->Description.")":"")
    																					."</td>\n<td>\n"
																		    			.$list->EditLink()
																		    			."</td>\n</tr>\n";
    	}
    	
    	print "<table>\n";
    	foreach($table as $section)
    		foreach($section as $row)
    			print $row;
    	print "</table>\n";    	 
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
	
	dbRoot::showPage("ExhibitionClass");
}
?>