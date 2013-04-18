<?php
include_once('ons_common.php');

class ExhibitionTest extends DataBaseTables
{
	public $tables=array("Exhibition");
	
	function DataRowProvider(){
		return array(
			array(1,array("Name"=>"Summer Show 2008")),
			array(2,array("Name"=>"Spring Show 2009")),
			array(3,array("Name"=>"Summer Show 2009")),
			array(4,array("Name"=>"Spring show 2010")),
			array(5,array("Name"=>"Summer Show 2010")),
			array(6,array("Name"=>"Spring Show 2011")),
			array(7,array("Name"=>"Summer Show 2011")),
			array(8,array("Name"=>"Spring Show 2012")),
			array(9,array("Name"=>"Summer Show 2012")),
		);
	}

	function FileName(){
		return "Tables/Exhibition";
	}	
}
?>