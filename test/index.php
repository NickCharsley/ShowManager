<?php
/*
 * File index.php
 * Created on 14 Aug 2009 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2009 ONS
 *
 */
$show_properties=true;

 if (!defined("__COMMON__"))
 	include_once('ons_common.php');
 error_log("Enter ".__FILE__);
//************************************************
 if (isset($_GET['backupdb'])){
 	print_pre(dbRoot::BackupDB());
 	die;
 }
krumo::enable();
$web=true;

//doExhibition::Export(11);
LoadDatabase::testInitaliseDatabase(true);
dbRoot::Import(buildPath(__DIR__,'testData','ShowManager','ImportSummer2013.xml'));

print_line("Finished :)");


//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){

}
//************************************************
error_log("Exit ".__FILE__);
?>
