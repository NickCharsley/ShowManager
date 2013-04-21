<?php
/**
 * Table Definition for sponsorship
 */
require_once 'dbRoot.php';

class doSponsorship extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'sponsorship';         // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $ExhibitionClassPrizeID;          // int(4)   not_null
    public $Prize;                           // varchar(50)   not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
	public $fb_formHeaderText="Sponsorship";
	public $fb_fieldLabels=array("ExhibitionClassPrizeID"=>"Class Prize");
	public $fb_linkDisplayLevel=3;
	###End Formbuilder Code

	function EditLink(){
    	return AddButton("Edit","?type=sponsorship&action=edit&id=".$this->ID);
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	$Sponsorship=DB_DataObject::factory("Sponsorship");
	if (isset($_GET['action']) and isset($_GET['id'])){
		$Sponsorship->get($_GET['id']);
	}

	PageTitle();

	$fg =&DB_DataObject_FormBuilder::create($Sponsorship);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	$Sponsorship=DB_DataObject::factory("Sponsorship");
	$Sponsorship->ShowID=$defs->ShowID;
	$Sponsorship->find();
	print "<table>\n";
	while ($Sponsorship->fetch()){
		print "<tr>\n";
			print "<td>\n";
				print $Sponsorship->Name;
			print "</td>\n";
			print "<td>\n";
				print $Sponsorship->Prize;
			print "</td>\n";
			print "<td>\n";
				print $Sponsorship->EditLink();
			print "</td>\n";
		print "</tr>\n";
	}
	print "</table>\n";

	print AddButton("New","?action=new");

	print "<hr/>";
	$form->display();

	print "<hr/>";

}
?>