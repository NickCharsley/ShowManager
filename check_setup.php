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
 if (!defined("__COMMON__"))
 	include_once('ons_common.php');
 error_log("Enter ".__FILE__);
//************************************************
	print "<title>Check Setup:Show Manager";
	if (isset($GLOBALS['TESTMODE'])) print ":".$GLOBALS['TESTMODE'];
	print "</title>";

	Krumo::enable();

	Krumo($db);
	Krumo($config);

	print "<hr/>\n";//Standard Krumo Stuff

	krumo($GLOBALS);

	Krumo::classes();
	Krumo::conf();
	Krumo::cookie();
	Krumo::defines();
	Krumo::env();
	Krumo::extensions();
	Krumo::functions();
	Krumo::get();
	Krumo::headers();
	Krumo::includes();
	//Krumo::interfaces();
	Krumo::path();
	Krumo::phpini();
	Krumo::post();
	Krumo::request();
	Krumo::server();
	Krumo::session();
	Krumo::version();



//************************************************
error_log("Exit ".__FILE__);
?>
