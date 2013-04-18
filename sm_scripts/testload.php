<?php
/*
 * File testload.php
 * Created on Sep 19, 2006 by N.A.Charsley
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2006 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('common.php');
 error_log("Enter", E_USER_NOTICE);
//************************************************
include_once("utils.php");



function showLoad(){
//	DB_DataObject::debugLevel(5);

//	$sf=new onsFormDate("id>100");
	$sub=DB_DataObject::factory("subject");
	$sub->orderBy("id DESC");
	$sub->stype='P';
	$sub->find(true);
	$sf=new onsFormSubject($sub);		
}

	resetDB();
	#DB_DataObject::debugLevel(5);
	$mem=new onsMemorialFile("$root_path/harrold.txt");
	$mem->parse();
	$mem->asDataObject();
	//Now view  what loaded
	showLoad();

//************************************************
error_log("Exit", E_USER_NOTICE);
?>
