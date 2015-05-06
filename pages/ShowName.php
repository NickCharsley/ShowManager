<?php
/*
 * File ShowName
 * Created on  by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright  ONS
 *
 */
if (!defined("__COMMON__"))
 	include_once 'ons_common.php';
error_log("Enter ".__FILE__);
//************************************************

//TODO: Need some content here!

//** Debug Code **************************
if (str_replace("/","\\",__FILE__)==str_replace("/","\\",$_SERVER["SCRIPT_FILENAME"]))
{
	phpinfo();
}
//************************************************
error_log("Exit ".__FILE__);
?>