<?php
/*
 * File common.php
 * Created on Jun 1, 2006 by N.A.Charsley
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2006 ONS
 *
 */
 define("__COMMON__",1);
 //ob_start("ob_gzhandler");

 error_reporting(E_ALL ^ E_DEPRECATED  ^ E_NOTICE ^ E_USER_NOTICE);

 trigger_error("Enter", E_USER_NOTICE);
/************************************************************\
*	Comon Utils
\************************************************************/
	include_once("scripts/utils.php");
	include_once("scripts/const.php");
/************************************************************\
*	Setup
\************************************************************/
$time_start=microtime(true);

	//print_pre($_SERVER["SERVER_NAME"]);
	//print_pre($_ENV["COMPUTERNAME"]);

	if (isset($_SERVER["SERVER_NAME"]))
		$system=$_SERVER["SERVER_NAME"];
	else
		$system='';
	
	$compname=strtolower(getenv("COMPUTERNAME"));

	global $web;

	$root_path=dirname(__FILE__);
	if ($system=='localhost' OR $system=='doug') {
		$root="http://localhost/workspace/ShowManager";
		$ips=";";
		if ($compname=="doug"){
			$do_ini='do_doug.ini';
		} elseif ($compname=="hptouch"){
			$do_ini='do_hptouch.ini';
		} elseif ($compname=="phil3"){
			$do_ini='do_phil3.ini';
			$root="http://localhost/ShowManager";
		} elseif ($compname=="sooty-laptop"){
			$do_ini='do_sooty-laptop.ini';
			$root="http://localhost/show";
		} elseif ($compname=="toshiba"){
			$do_ini='do_toshiba.ini';
			$root="http://localhost/ShowManager";
		} elseif ($compname=="nick-xps"){
			$do_ini='nick-xps.ini';
			$root="http://localhost/workspace/ShowManager";
		} else {
			phpinfo();
			die("System = $system");
			$do_ini='do.ini';
		}
		$web=true;

		ini_set('error_log',"$root_path/php_error.log");
	} else	if ($system=='hptouch') {
		$ips=";";
		$do_ini='do_hptouch.ini';
		$web=true;
		$root="http://hptouch/workspace/ShowManager";

		ini_set('error_log',"$root_path/php_error.log");
	} elseif ($system=='linux.ons') {
		$ips=":";
		ini_set("include_path",ini_get("include_path")."$ips/usr/share/php" );
		$do_ini='do_ons.ini';
		$web!=false;
	} elseif ($system=='intranet') {
		$ips=";";
		ini_set("include_path",ini_get("include_path")."$ips$root_path/pear" );
		$do_ini='do_intranet.ini';
		$web!=false;
	} else
		die("System = $system");



	ini_set("include_path",ini_get("include_path").
									"$ips$root_path".
									"$ips$root_path/scripts".
									"$ips$root_path/database".
									"$ips$root_path/class".
									"$ips$root_path/pages" );

/***********************************************************\
  * Database Connectivity
 \***********************************************************/
 	require_once('DB.php');
 	require_once('DB/DataObject.php');

 	$config = parse_ini_file("$root_path/database/$do_ini", true);
	//print_pre($config);
	foreach($config as $class=>$values) {
	    $options = &PEAR::getStaticProperty($class,'options');
	    $options = $values;
	}

	$db =DB::connect($config['DB_DataObject']['database']);
	if (PEAR::isError($db)) {

		print_pre($db);
	    die("Early Out!! ".$db->getMessage());
	}
	if (isset($_GET['database'])) print_pre($db);

	$db->setFetchMode(DB_FETCHMODE_ASSOC);
	set_time_limit(0);
	DB_DataObject::debugLevel(0);

 	if (isset($_GET['database'])) print_pre($db);

/************************************************************\
  *	Generic Setup
\************************************************************/
//Check defaults

//************************************************
trigger_error("Exit", E_USER_NOTICE);
?>
