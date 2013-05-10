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
	function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID."#form");
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