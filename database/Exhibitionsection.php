<?php
/**
 * Table Definition for exhibitionsection
 */
require_once 'common.php';

class doExhibitionsection extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitionsection';    // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionID;                    // int(4)  unique_key not_null
    public $SectionNumber;                   // int(4)  unique_key not_null
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
	function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID);
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	PageTitle();

	PEARError($show=DB_DataObject::factory("ExhibitionSection"));
	$show->ExhibitionID=$defs->ShowID;
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("ExhibitionSection"));
	}



	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	PEARError($show=DB_DataObject::factory("ExhibitionSection"));
	$show->ExhibitionID=$defs->ShowID;
	$show->find();
	print "<table>\n";
	while ($show->fetch()){
		$show->getLinks();
		//print_pre($show);
		print "<tr>\n";
			print "<td>\n";
				print "Section ".$show->SectionNumber.": " ;
				print $show->_SectionID->Name;
			print "</td>\n";
			print "<td>\n";
				print $show->EditLink();
			print "</td>\n";
		print "</tr>\n";
	}
	print "</table>\n";

	print "<hr/>";
	print AddButton("New","?action=new");
	print "<br><br>";
	$form->display();

	print "<hr/>";
}
?>