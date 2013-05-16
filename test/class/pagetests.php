<?php
include_once('ons_common.php');
error_log("Enter ".__FILE__);
abstract class pagetests extends ONS_Tests_DatabaseTestCase
{

	function testPageTitleNoShow(){
		truncateTable("Defaults");
		dbRoot::clearCache("Defaults");
		$this->expectOutputString("<title>Show Manager".(isset($GLOBALS['TESTMODE'])?":".$GLOBALS['TESTMODE']:"")."</title>");
		$this->getOutput();
	}

	public function ListProvider(){
		return array(array(""));
	}

	function testPageTitle(){
		dbRoot::clearCache("Defaults");

		$this->expectOutputRegex("|^<title>Show Manager".(isset($GLOBALS['TESTMODE'])?":".$GLOBALS['TESTMODE']:"")."</title>.*|");
		PageTitle();
	}

	/**
	 *	@dataProvider ListProvider
	 */
	function testList($row){
		if ($row=="")
			$this->assertEquals(1,1);
		else {
			dbRoot::clearCache("Defaults");
			$this->expectOutputRegex("|.*$row.*|");
			$this->getOutput();
		}
	}

}
error_log("Exit ".__FILE__);
?>