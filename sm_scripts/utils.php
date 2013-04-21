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
 error_log("Enter", E_USER_NOTICE);

	function PageTitle(){	
		global $defs;
		
		print "<title>Show Manager";
		if (isset($GLOBALS['TESTMODE'])) print ":".$GLOBALS['TESTMODE']; 
		print "</title>";

		if (!isset($defs)){
			$defs=DB_DataObject::factory("Defaults");
			$defs->find(true);
		}
		if ($defs->ShowName==""){
			include("pages/ShowName.php");
			return;
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
	
error_log("Exit", E_USER_NOTICE);
?>
