<?php
/**
 * Table Definition for exhibitionexhibitor
 */
require_once 'dbRoot.php';

class doExhibitionexhibitor extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitionexhibitor';    // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionID;                    // int(4)  unique_key not_null default_7
    public $ExhibitorNumber;                 // int(4)  unique_key not_null
    public $ExhibitorID;                     // int(4)  unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	###Formbuilder Code
	public $fb_formHeaderText="Exhibitor";
	public $fb_linkDisplayFields=array("ExhibitorNumber");
	public $fb_userEditableFields=array("ID"/*,"ExhibitionID"*/,"ExhibitorNumber","ExhibitorID");
	public $fb_fieldLabels=array("ExhibitionID"=>"Show","ExhibitorID"=>"Competitor","ExhibitorNumber"=>"Number");
	public $fb_linkNewValue=array("ExhibitorID");
	public $fb_linkDisplayLevel=2;
	
	###End Formbuilder Code
	function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID."#form");
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
	
	$defs=dbRoot::fromCache("Defaults",1);

	PageTitle();
	print AddButton("New","?action=new#form");
	print "<br><br>";
	//DB_DataObject::debugLevel(5);

	PEARError($show=DB_DataObject::factory("ExhibitionExhibitor"));
	$show->ExhibitionID=$defs->ShowID;
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("ExhibitionExhibitor"));
	}



	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	PEARError($exhib=DB_DataObject::factory("ExhibitionExhibitor"));
	$exhib->ExhibitionID=$defs->ShowID;
	$exhib->orderBy("ExhibitorNumber");
	$exhib->find();
	print "<table>\n";
	while ($exhib->fetch()){
		$exhib->getLinks();
		//print_pre($exhib);
		print "<tr>\n";
			print "<td>\n";
				print "Competitor ".$exhib->ExhibitorNumber.": " ;
				print $exhib->_ExhibitorID->Name;
			print "</td>\n";
			print "<td>\n";
				print $exhib->EditLink();
			print "</td>\n";
		print "</tr>\n";
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