<?php
include_once('ons_common.php');

class IndexPageTest extends ONS_Tests_DatabaseTestCase
{
	public $tables=array("Defaults");
	
	function FileName(){
		return "Tables/Defaults";
	}

	/*
	 *  @outputBuffering enabled
	 */
	function testPageTitle(){
		PageTitle();
		$this->assertEquals(1,1);
	}
}
?>