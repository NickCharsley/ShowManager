<?php
/**
 * Table Definition for class
 */
require_once 'dbRoot.php';

class doClass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'class';               // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $Description;                     // varchar(255)  unique_key

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
	public $fb_formHeaderText="Section";
	public $fb_linkDisplayFields=array("Name","Description");
	###End Formbuilder Code
	function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID);
    }
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	PageTitle();

	PEARError($show=DB_DataObject::factory("Class"));
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("Class"));
	}



	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	PEARError($show=DB_DataObject::factory("Class"));
	$show->find();
	print "<table>\n";
	while ($show->fetch()){
		$show->getLinks();
		print "<tr>\n";
			print "<td>\n";
				print $show->Name;
				if (strlen($show->Description)>0)
					print " (".$show->Description.")";
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