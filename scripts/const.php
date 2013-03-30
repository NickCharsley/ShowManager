<?php
/*
 * File const.php
 * Created on Sep 21, 2006 by N.A.Charsley
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2006 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('common.php');
 trigger_error("Enter", E_USER_NOTICE);
//************************************************


//** Eclipse Debug Code **************************
if (strpos($_SERVER['SCRIPT_NAME'],"const.php")>0){
	print("<h1 align='center'>const.php</h1>");
	phpinfo();
}
//************************************************
trigger_error("Exit", E_USER_NOTICE);
?>
