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
    
    if ($show_properties){
        print ("<h1>Listing of Expected Property Files</h1>\n");
    }
    
    @$props['Section_OS']=strtolower(PHP_OS);
    @$props['Section_SERVER']=strtolower($_SERVER["COMPUTERNAME"]);
    @$props['Section_COMPUTERNAME']=strtolower(getenv("COMPUTERNAME"));
    @$doms=preg_split("#[.]+#", strtolower($_SERVER["SERVER_NAME"]));
    if (count($doms)) {
        $url=$doms[0];
        $props['section_Domain_0']=$url;
        for($index=1;$index<count($doms);$index++){
            $url.=".{$doms[$index]}";
            $props["section_Domain_$index"]=$url;
        }
    }
    @$props['Section_TERM']=strtolower($_SERVER["TERM"]);
    @list($props["Section_SERVER_SOFTWARE"])=preg_split("#[./ (]+#", strtolower($_SERVER["SERVER_SOFTWARE"]),2);

    $ini="";
    $filename=__DIR__."/properties";
    if (isset($TESTMODE)){
        $props['Section_TEST']="test";
        $props['Section_TEST_LOCAL']="local.test";
    }

    //Local is last as it has to beable to overwrite other settings
    $props['Section_LOCAL']="local";        

    foreach($props as $type=>$prop)
        if ($prop<>"") {
            if ($show_properties) {
                print "<h2>$prop.properties</h2><pre>";
            }
            if ($type<>""){
                $ini.="\n$type=$prop";
            }
            @$data=file_get_contents("$filename/$prop.properties");
            $ini.="\n$data";
            if ($show_properties) {
                print "$data</pre><hr/>";
            }
        }

    $vars=parse_ini_string($ini);
    foreach($vars as $var=>$values)
        $GLOBALS[$var]=$values;

    if ($show_properties){
        print"<h3>Vars</h3>";
        print ("<pre>\n");
        print_r($vars);
        print ("</pre>");
        print"<h3>Globals</h3>";
        print ("<pre>\n");
        print_r($GLOBALS);
        print ("</pre>");
        die;
    }
    return array_keys($vars);
}

$root_path=  dirname(__FILE__);

loadProperties();

ini_set('log_errors',"on");
ini_set('error_log',$error_log);
//ini_set('display_errors',"on");
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
    .(isset($test_path)?$ips.$test_path.$fps."Functional":"")
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
if ($debug) print(ini_get("include_path"));
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
/************************************************************\
*   Common Utils
\************************************************************/
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
#if it dies here check sudo pear install -a ezc/eZComponents 
@include_once "script/utils.php";
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
@include_once "sm_scripts/utils.php";
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
@include_once "const.php";
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
if (isset($GLOBALS['test'])) {
    krumo::disable();
}
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
//PEAR::setErrorHandling(PEAR_ERROR_CALLBACK, 'PEAR_ErrorToPEAR_Exception');
/***********************************************************\
 * Database Connectivity
\***********************************************************/    
if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
if (file_exists(buildpath($root_path,"database",$do_ini))){
    if ($debug) print(__FILE__."(".__LINE__.")<br/>\n");
    #if it dies here it's probably missing pear DB etc
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
