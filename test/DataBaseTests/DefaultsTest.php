<?php
include_once('ons_common.php');

class DefaultsTest extends DataBaseTables
{
	public $tables=array("Defaults");
	
	function DataRowProvider(){
		return array(
			array(1,array("ShowName"=>"BHS","ShowID"=>1)),
		);
	}

	function FileName(){
		return "Tables/Defaults";
	}	
}
?>