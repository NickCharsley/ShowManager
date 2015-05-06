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

    function PageTitle(){
        global $root;
        if (!headers_sent())
            header('Content-Type: text/html; charset=utf-8');
        $defs=dbRoot::fromCache("Defaults",1);
        print "<head>\n";
        print "<title>Show Manager";
        if (isset($GLOBALS['TESTMODE'])) print ":".$GLOBALS['TESTMODE'];
        print "</title>";

        print "<link rel='stylesheet' href='$root/jqwidgets/styles/jqx.base.css' type='text/css' />";
        print "<script type='text/javascript' src='$root/scripts/gettheme.js'></script>";
        print "<script type='text/javascript' src='$root/scripts/jquery-1.10.1.min.js'></script>";
        print "<script type='text/javascript' src='$root/jqwidgets/jqxcore.js'></script>";
        print "<script type='text/javascript' src='$root/jqwidgets/jqxtabs.js'></script>";
                
        print "</head>\n";
                
        if ($defs->ShowName==""){
            include("pages/ShowName.php");
            return false;
        }
        $defs->getLinks();
        print "<div align='center'><h1>";
        print $defs->ShowName;
        print "</h1>";
        if (isset($defs->_ShowID)){
            print "<h2>";
            print $defs->_ShowID->Name;
            print "</h2>";

        }
        print "</div>";
        Menu();
        return true;
    }

    function ButtonCSS(){
        global $button_css;
        global $root;
        if (!isset($button_css)){
            $button_css="<link href='$root/css/style.css' media='all' rel='stylesheet' type='text/css' />";
            print($button_css);
        }
    }

    function Menu(){
        ButtonCSS();
        global $root;
        print "<table><tr>";
        print "<td>".AddButton("Home"			,$root)."</td>";
        print "<td>".AddButton("Shows"			,$root."/database/Exhibition.php")."</td>";
        print "<td>".AddButton("Sections"		,$root."/database/Exhibitionsection.php")."</td>";
        print "<td>".AddButton("Classes"		,$root."/database/Exhibitionclass.php")."</td>";
        print "<td>".AddButton("Prizes"			,$root."/database/Prize.php")."</td>";
        print "<td>".AddButton("Trophies"		,$root."/database/Trophy.php")."</td>";
        print "<td>".AddButton("Sponsorship"	,$root."/database/Sponsorship.php")."</td>";
        print "<td>".AddButton("Competitors"	,$root."/database/Exhibitionexhibitor.php")."</td>";
        print "<td>".AddButton("Results"		,$root."/pages/results.php")."</td>";
        print "<td>".AddButton("Summary"		,$root."/pages/summary.php")."</td>";
        print "</tr></table>";
        print "<hr/>";
    }

error_log("Exit ".__FILE__);
?>
