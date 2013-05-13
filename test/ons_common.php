<?php
/*
 * File ons_common.php
 * Created on Jun 1, 2006 by N.A.Charsley
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2006 ONS
 *
 */

define("__COMMON__",1);
ob_start("ob_gzhandler");

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

error_log("Enter ".__FILE__);
/************************************************************\
*   Setup
\************************************************************/

$GLOBAL['show_properties']=true;
$GLOBAL['test']=true;

include_once("../ons_common.php");

//************************************************
debug_error_log("Exit ".__FILE__);
?>
