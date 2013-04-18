<?php
/**
 * Table Definition for prize
 */
require_once 'DB/DataObject.php';

class doPrize extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    protected $__table = 'prize';               // table name
    protected $ID;                              // int(4)  primary_key not_null
    protected $Name;                            // varchar(255)  unique_key not_null
    protected $Prize;                           // decimal(10,2)  
    protected $Points;                          // int(4)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    function EditLink(){
    	print "<td>".AddButton('Edit',"?action=edit&id=".$this->ID)."</td>";
    }
	###Formbuilder Code
	public $fb_linkDisplayFields=array("Name");
	###End Formbuilder Code

}
//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	$prize=DB_DataObject::factory("Prize");
	$prize->ShowID=$defs->ShowID;
	if (isset($_GET['action']) and isset($_GET['id'])){
		$prize->get($_GET['id']);
		if ($_GET['action']=='default'){
			$defs->prizeID=$prize->ID;
			$defs->update();
			$defs->getLinks();
		}
		if ($_GET['action']<>'edit'){
			$prize=DB_DataObject::factory("Prize");
			$prize->ShowID=$defs->ShowID;
		}
	}


	PageTitle();

	$fg =&DB_DataObject_FormBuilder::create($prize);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	$prize=DB_DataObject::factory("Prize");
	$prize->ShowID=$defs->ShowID;
	$prize->find();
	print "<table>\n";
	while ($prize->fetch()){
		print "<tr>\n";
			print "<td>\n";
				print $prize->Name;
			print "</td>\n";
			print "<td>\n";
				print "�".$prize->Prize;
			print "</td>\n";
			print "<td>\n";
				print $prize->EditLink();
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