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
    	$list->find();
    	print "<table>\n";
    	while ($list->fetch()){
    		$list->getLinks();
    		print "<tr>\n";
    		print "<td colspan='3'>\n";
    		print "Section ".$list->SectionNumber.": " ;
    		print $list->_SectionID->Name;
    		print "</td>";
    		print "</tr>";
    		PEARError($show=DB_DataObject::factory("ExhibitionClass"));
    		$show->ExhibitionID=$list->ExhibitionID;
    		$show->ExhibitionSectionID=$list->ID;
    		$show->orderBy("ClassNumber");
    		$show->find();
    		while ($show->fetch()){
    			$show->getLinks();
    			print "<tr>\n";
    			print "<td>&nbsp;</td>\n";
    			print "<td>\n";
    			print "Class ".$show->ClassNumber.": " ;
    			print $show->_ClassID->Name;
    			if (strlen($show->_ClassID->Description)>0)
    				print " (".$show->_ClassID->Description.")";
    			print "</td>\n";
    			print "<td>\n";
    			print $show->EditLink();
    			print "</td>\n";
    			print "</tr>\n";
    		}
    	}
    	print "</table>\n";    	 
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){

	
	include_once("ons_common.php");
	
	PEARError($section=DB_DataObject::factory("ExhibitionClass"));
	
	$defs=dbRoot::fromCache("Defaults",1);
	$section->ExhibitionID=$defs->ShowID;
	
	if (PageTitle()){
		$section->PrintList();
		$section->PrintForm();
	}
		
	/** /
	include_once("ons_common.php");
	$defs=dbRoot::fromCache("Defaults",1);

	PageTitle();

	print AddButton("New","?action=new#form");
	print "<br><br>";

	print "<hr/>";
	print AddButton("New","?action=new#form");
	print "<br><br>";
	print "<a id='form' name='form'>&nbsp;</a>";
	$form->display();

	print "<hr/>";
	/**/
}
?>