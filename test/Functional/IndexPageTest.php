<?php
include_once('ons_common.php');

class IndexPageTest extends pagetests
{
	public $tables=array("Defaults","Exhibition");
	
	function FileName(){
		return "Pages/Index";
	}
	
	function getOutput(){
		PageTitle();
	}
	
		
}
?>