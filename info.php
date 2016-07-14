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
if (!defined("__COMMON__") && isset($_GET['full']))
 	include_once('ons_common.php');
/**/
 error_log("Enter ".__FILE__);
//************************************************
phpinfo();

//shows

//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){

}
//************************************************
error_log("Exit ".__FILE__);
?>
