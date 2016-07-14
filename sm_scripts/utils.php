<?php
/*
 * File utils.php
 *
 * Created on 01-Feb-2006 by N.A.Charsley
 *
 * Copyright 2006 ONS
 *
 *
 *
 */
if (!defined("__COMMON__"))
   include_once('ons_common.php');
error_log("Enter ".__FILE__);

    function buildPageTitle()
    {        
        global $root;
        $defs=dbRoot::fromCache("Defaults",1);
        $print ="<head>\n";
        $print.="<title>Show Manager";
        if (isset($GLOBALS['TESTMODE'])) {
            $print.= ":".$GLOBALS['TESTMODE'];
        }
        $print.="</title>\n";

        $print.= "<link rel='stylesheet' href='$root/jqwidgets/styles/jqx.base.css' type='text/css' />\n";
        $print.= "<script type='text/javascript' src='$root/scripts/gettheme.js'></script>\n";
        $print.= "<script type='text/javascript' src='$root/scripts/jquery-1.10.1.min.js'></script>\n";
        $print.= "<script type='text/javascript' src='$root/jqwidgets/jqxcore.js'></script>\n";
        $print.= "<script type='text/javascript' src='$root/jqwidgets/jqxtabs.js'></script>\n";
                
        $print.= "</head>\n";
                
        if ($defs->ShowName==""){
            include("pages/ShowName.php");
            return array(false,$print);
        }

        $print.= "<div align='center'>\n<h1>\n";
        $print.= $defs->ShowName;
        $print.= "</h1>\n";

        if (isset($defs->ShowID)){
            $defs->getLinks();
            if (isset($defs->_ShowID)){
                $print.= "<h2>\n";
                $print.= $defs->_ShowID->Name;
                $print.= "</h2>\n";
            }
        }
        $print.= "</div>\n";
        $print.= buildMenu();
        return array(true,$print);
    }

    function PageTitle(){
        $data=buildPageTitle();
        if (!headers_sent()) {
            header('Content-Type: text/html; charset=utf-8');
        }
        print $data[1];
        return $data[0];
    }

    function buildButtonCSS(){
        global $button_css;
        global $root;
        if ($button_css=="") {//!isset($button_css)){
            $button_css="<link href='$root/css/style.css' media='all' rel='stylesheet' type='text/css' />\n";
            return $button_css;
        }
        return "";
    }
    
    function ButtonCSS(){
        print buildButtonCSS();
    }

    function buildMenu(){
        $print= buildButtonCSS();
        global $root;
        $print.= "<table>\n<tr>\n";
        $print.= "<td>\n".AddButton("Home"          ,$root)."</td>\n";
        $print.= "<td>\n".AddButton("Shows"         ,$root."/database/Exhibition.php")."</td>\n";
        $print.= "<td>\n".AddButton("Sections"      ,$root."/database/Exhibitionsection.php")."</td>\n";
        $print.= "<td>\n".AddButton("Classes"       ,$root."/database/Exhibitionclass.php")."</td>\n";
        $print.= "<td>\n".AddButton("Prizes"        ,$root."/database/Prize.php")."</td>\n";
        $print.= "<td>\n".AddButton("Trophies"      ,$root."/database/Trophy.php")."</td>\n";
        $print.= "<td>\n".AddButton("Sponsorship"   ,$root."/database/Sponsorship.php")."</td>\n";
        $print.= "<td>\n".AddButton("Competitors"   ,$root."/database/Exhibitionexhibitor.php")."</td>\n";
        $print.= "<td>\n".AddButton("Results"       ,$root."/pages/results.php")."</td>\n";
        $print.= "<td>\n".AddButton("Check Results" ,$root."/pages/checkResults.php")."</td>\n";
        $print.= "<td>\n".AddButton("Summary"       ,$root."/pages/summary.php")."</td>\n";
        $print.= "</tr>\n</table>\n";
        $print.= "<hr/>\n";
        return $print;
    }
    
    function Menu(){
        print buildMenu();
    }

error_log("Exit ".__FILE__);
?>
