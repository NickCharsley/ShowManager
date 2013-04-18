<?php
/**
 * Table Definition for exhibitionclass
 */
require_once 'DB/DataObject.php';

class doExhibitionclass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    protected $__table = 'exhibitionclass';     // table name
    protected $ID;                              // int(4)  primary_key not_null
    protected $ExhibitionID;                    // int(4)  unique_key not_null
    protected $ExhibitionSectionID;             // int(4)  unique_key not_null
    protected $ClassNumber;                     // int(4)  unique_key not_null
    protected $ClassID;                         // int(4)  unique_key not_null

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
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	PageTitle();

	print AddButton("New","?action=new#form");
	print "<br><br>";

	PEARError($show=DB_DataObject::factory("ExhibitionClass"));
	$show->ExhibitionID=$defs->ShowID;
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("ExhibitionClass"));
	}

	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	PEARError($sec=DB_DataObject::factory("ExhibitionSection"));
	$sec->ExhibitionID=$defs->ShowID;
	$sec->orderBy("sectionNumber");
	$sec->find();
	print "<table>\n";
	while ($sec->fetch()){
		$sec->getLinks();
		print "<tr>\n";
			print "<td colspan='3'>\n";
				print "Section ".$sec->SectionNumber.": " ;
				print $sec->_SectionID->Name;
			print "</td>";
		print "</tr>";
		PEARError($show=DB_DataObject::factory("ExhibitionClass"));
		$show->ExhibitionID=$defs->ShowID;
		$show->ExhibitionSectionID=$sec->ID;
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

	print "<hr/>";
	print AddButton("New","?action=new#form");
	print "<br><br>";
	print "<a id='form' name='form'>&nbsp;</a>";
	$form->display();

	print "<hr/>";
}
?>