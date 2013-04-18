<?php
/*
 * File Prizes.php
 * Created on 24 Jun 2010 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2010 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('common.php');
 error_log("Enter", E_USER_NOTICE);
//************************************************
if (class_exists('gtk',false)) {
	//TODO:any gtk specific code for Prizes.php goes here
} else {
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
	print "</table><br/>\n";

	print AddButton("New","?action=new");

	print "<br/><br/><hr/>";
	$form->display();

	print "<hr/>";

}


//TODO:any generic code for Prizes.php goes here

//DONE: It's just a stub file'

//** Eclipse Debug Code **************************
if (str_replace("/","\\",__FILE__)==str_replace("/","\\",$_SERVER["SCRIPT_FILENAME"])){
}
//************************************************
error_log("Exit", E_USER_NOTICE);
?>
