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
 	include_once('common.php');
 trigger_error("Enter", E_USER_NOTICE);

 	function getValue(&$data,$tag){
 		//Assumption Tag is last thing in text,
 		//all data past this point is part of the value
 		//the tag is removed.
 		if (($pos=strpos($data,$tag))===false)
 			$ret="";
 		else {
 			$ret=trim(substr($data,$pos+strlen($tag)));
 			$data=trim(substr($data,0,$pos));
 		}

 		return $ret;
 	}

 	function compress($data){
 		return str_replace(" ","",$data);
 	}

 	function  getGetLine($append=true){
 		$ret="";

 		if  (isset($_GET)){
 			foreach ($_GET as  $key=>$value){
 				if (strlen($ret)>0)
 					$ret.="&";
 				else {
 					if ($append)
 						$ret="&";
 					else
 						$ret="?";
 				}

 				$ret.="$key=$value";
 			}
 		}
 		return $ret;
 	}
/*
	function dumpFile($file){
		$lines = file($file);

		// Loop through our array, show HTML source as HTML source; and line numbers too.
		foreach ($lines as $line_num => $line) {
		    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
		}

	}
*/

function PEARError($obj,$msg="Pear Error"){
	if (PEAR::isError($obj)) {
	    die("$msg ".$obj->getMessage());
	}
}

function truncateTable($table){
	global $db;

	PEARError($db->query("truncate table $table"));
}

	function resetDB(){
		global $db;

		truncateTable("defaults");
		truncateTable("Representtype");
		truncateTable("Source");
		truncateTable("Subject");
		truncateTable("charpart");
		truncateTable("date");
		truncateTable("datepart");
	}

	function PageTitle(){
		global $defs;

		if (!isset($defs)){
			$defs=DB_DataObject::factory("Defaults");
			$defs->find(true);
		}
		if ($defs->ShowName==""){
			include("pages/ShowName.php");
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
		print "<td>".AddButton("Sponsorship"		,$root."/database/Sponsorship.php")."</td>";
		print "<td>".AddButton("Competitors"		,$root."/database/Exhibitionexhibitor.php")."</td>";
		print "<td>".AddButton("Results"		,$root."/pages/results.php")."</td>";
		print "<td>".AddButton("Summary"		,$root."/pages/summary.php")."</td>";
		print "</tr></table>";
		print "<hr/>";
	}

 	function __autoload($class_name) {
 		if (!file_exists($class_name . '.php')){
 			$class_name=str_replace("_","\\",$class_name);
 		}
		require_once $class_name . '.php';
	}

	function debug_print($text){
		global $web;
		if (!$web) print ($text);
	}

	function print_pre($data,$ret=false){
		$strRet="<pre>".htmlspecialchars(print_r($data,true))."</pre>\n";
		if (!$ret) echo $strRet;
		return $strRet;
	}
	function printLine($line){
		global $web;
		print $line.(($web)?"<br>\n":"\n");
	}

	function AddButton($text,$action){
		return "<a class='button' href='$action' onclick='this.blur();'><span>$text</span></a>\n";
	}

	function buildPath(){
		$arg_list = func_get_args();
		$numargs = func_num_args();

		$ret=$arg_list[0];
		for ($i = 1; $i < $numargs-1; $i++) {
			switch 	(substr($arg_list[$i],0,1)){
				case "/":
				case "\\":
					$ret.=$arg_list[$i];
				break;
				default:
					$ret.="/".$arg_list[$i];
				break;
			}
			switch 	(substr($ret,-1)){
				case "/":
				case "\\":
					$ret=substr($ret,0,-1);
					break;
			}
	   	}
		switch 	(substr($arg_list[$i],0,1)){
			case "/":
			case "\\":
				$ret.=$arg_list[$i];
				break;
			default:
				$ret.="/".$arg_list[$i];
				break;
		}
		return $ret;
	}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	PageTitle();
}
 trigger_error("Exit", E_USER_NOTICE);
?>
