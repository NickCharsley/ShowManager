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
if (!isset($GLOBALS['TESTMODE'])){
    if (!in_array('ob_gzhandler', ob_list_handlers())) {
        ob_start('ob_gzhandler');
    } else {
        ob_start();
    }
}

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

/************************************************************\
*   Setup
\************************************************************/

global $web,$root,$root_path,$test_path,$ips,$fps,$db,$mobile,$local,$common_path,$system,$do_ini,$term;

	function loadProperties(){
		global $show_properties;
		global $TESTMODE;

		@$props[]=strtolower(PHP_OS);
		@$props[]=strtolower($_SERVER["COMPUTERNAME"]);
		@$props[]=strtolower(getenv("COMPUTERNAME"));
		@$doms=preg_split("#[.]+#", strtolower($_SERVER["SERVER_NAME"]));
		if (count($doms)){
			$url=$doms[0];
			$props[]=$url;
			for($index=1;$index<count($doms);$index++){
				$url.=".{$doms[$index]}";
				$props[]=$url;
			}
		}
		@$props[]=strtolower($_SERVER["TERM"]);
		@list($props[])=preg_split("#[./ (]+#", strtolower($_SERVER["SERVER_SOFTWARE"]),2);

		$ini="";
		$filename=__DIR__."/properties";
		if (isset($TESTMODE)){
			$props[]="test";
			//$filename=dirname($filename);
		}

		//Local is last as it has to beable to overwrite other settings
		$props[]="local";		

		foreach($props as $prop)
			if ($prop<>"")
				@$ini.="\n".file_get_contents("$filename/$prop.properties");

		$vars=parse_ini_string($ini);
		foreach($vars as $var=>$values)
			$GLOBALS[$var]=$values;

		if ($show_properties){
			print ("<pre>\n");

			foreach($props as $prop)
				if ($prop<>"")
					print("$prop.properties\n");
			print($ini);

			print_r($vars);

			print ("Listing of Expected Property Files\n");
			print ("</pre>");
		}
		return array_keys($vars);
	}

	loadProperties();

	ini_set('log_errors',"on");
	ini_set('error_log',$root_path."/test/php_error.log");
	ini_set('max_execution_time',30000);

	error_log("Enter ".__FILE__);//Late so it goes to the Error Log :)
	error_log("ShowManager Properties Loaded");

    $time_start=microtime(true);
    $debug=isset($_GET['debug']);

    if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");

    ini_set("include_path",ini_get("include_path")
                            /*Project Code*/
                            .$ips.$root_path
                            .$ips.$root_path.$fps."script"
                            .$ips.$root_path.$fps."class"
                            .$ips.$root_path.$fps."font"
                            .$ips.$root_path.$fps."pages"
                            .$ips.$root_path.$fps."extensions"
                            .$ips.$root_path.$fps."database"
                            /*Test Code*/
                            .(isset($test_path)?$ips.$test_path.$fps."class":"")
                            /*Common Code*/
                            .$ips.$common_path
                            .$ips.$common_path.$fps."script"
                            .$ips.$common_path.$fps."class"
                            .$ips.$common_path.$fps."database"
                            .$ips.$common_path.$fps."font"
                            .$ips.$common_path.$fps."pages"
                            .$ips.$common_path.$fps."extensions"
                            .$ips.$common_path.$fps."googleApi"
                            .$ips.$common_path.$fps."googleApi".$fps."contrib"
                            );
    if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
/************************************************************\
*   Common Utils
\************************************************************/
    if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
    @include_once "script/utils.php";
    @include_once "sm_scripts/utils.php";
    @include_once "const.php";
    if (isset($GLOBALS['test'])) krumo::disable();
    PEAR::setErrorHandling(PEAR_ERROR_CALLBACK, 'PEAR_ErrorToPEAR_Exception');
/***********************************************************\
 * Database Connectivity
\***********************************************************/
    
    if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
    if (file_exists(buildpath($root_path,"database",$do_ini))){
    	if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
        include_once "database/utils.php";
        if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");

        $db=setupDB($root_path,$do_ini,$debug);

    }
	else {
		print("Missing ".buildpath($root_path,"database",$do_ini)."?");
		dieHere();
	}
    if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");

  //** Eclipse Debug Code **************************
if (str_replace("/","\\",__FILE__)==str_replace("/","\\",$_SERVER["SCRIPT_FILENAME"])){
    if (class_exists('gtk',false)) {
        print($_SERVER["SCRIPT_FILENAME"]."\n\r");
        //TODO:any gtk specific code for index.php goes here
    } else {
        print("<h1 align='center'>".$_SERVER["SCRIPT_FILENAME"]."</h1>");
        //TODO:any web specific code for index.php goes here
    }
    //TODO:any generic code for index.php goes here

    phpinfo();

}
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");

//************************************************
error_log("Exit ".__FILE__);
?>
