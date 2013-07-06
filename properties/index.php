<?php
/*
 * File properties
 * Created on  by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright  ONS
 *
 */

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
    $filename=__DIR__;
    if (isset($TESTMODE)){
        $props[]="test";
    }

    //Local is last as it has to beable to overwrite other settings
    $props[]="local";		

    foreach($props as $prop)
        if ($prop<>"")
            @$ini.="\n".file_get_contents("$filename/$prop.properties");

    $vars=parse_ini_string($ini);
    print ("<h1>Listing of Expected Property Files</h1>\n");
    print ("<pre>\n");

    foreach($props as $prop)
    if ($prop<>"")
            print("$prop.properties\n");
    print($ini);
    print_r($vars);

    print ("</pre>");

    $GLOBALS['show_properties']=true;
//    include_once '../test/ons_common.php';
?>