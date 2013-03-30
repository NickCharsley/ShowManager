<?php
/**
 * Table Definition for section
 */
require_once 'DB/DataObject.php';

class doSection extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'section';             // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $Description;                     // varchar(255)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doSection',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	###Formbuilder Code
	public $fb_formHeaderText="Section";
	public $fb_linkDisplayFields=array("Name");
	###End Formbuilder Code
}
//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");
	PEARError($show=DB_DataObject::factory("Section"));
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("Section"));
	}

	PageTitle();

	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	PEARError($show=DB_DataObject::factory("Section"));
	$show->find();
	print "<table>\n";
	while ($show->fetch()){
		print "<tr>\n";
			print "<td>\n";
				print $show->Name;
			print "</td>\n";
			print "<td>\n";
				print $show->EditLink();
			print "</td>\n";
			print "<td>\n";
				print $show->DefaultLink();
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