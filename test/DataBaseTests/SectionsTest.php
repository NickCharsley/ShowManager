<?php
include_once('ons_common.php');

class SectionTest extends DataBaseTables
{
	public $tables=array("Section");
	
	function DataRowProvider(){
		return array(
			array(1,array("Name"=>"Flowers")),
			array(2,array("Name"=>"Pot Plants")),
			array(3,array("Name"=>"Vegetables")),
			array(4,array("Name"=>"Fruit")),
			array(5,array("Name"=>"Homecraft")),
			array(6,array("Name"=>"Floral Art")),
			array(7,array("Name"=>"Photography")),
			array(8,array("Name"=>"Art")),
			array(9,array("Name"=>"Needlecraft/Hobbies")),
			array(10,array("Name"=>"Children")),
			array(11,array("Name"=>"2009 Section 1")),
			array(12,array("Name"=>"Spring Show","Description"=>"All Classes")),
			array(13,array("Name"=>"2012 Spring Show")),
		);
	}

	function FileName(){
		return "Tables/Section";
	}	
}
?>