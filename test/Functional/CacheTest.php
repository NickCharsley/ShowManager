<?php
include_once('ons_common.php');


class CacheTest extends PHPUnit_Framework_TestCase
{
	public $loadDB;
		
	function __construct(){
		$this->loadDB=new LoadDatabase("Functional/Cache",array("Defaults","Exhibition"));
	}

	function testInitaliseDatabase(){
		$this->loadDB->testInitaliseDatabase();
	}
	
	function testDefaultsCacheLoaded(){
		global $dbTables;
		$defs1=dbRoot::fromCache("Defaults",1);
		$this->assertGreaterThanOrEqual(1,count($dbTables["Defaults"]));	
	}

	/**
	 * @depends testDefaultsCacheLoaded
	 */
	function testDefaultsCacheCleared(){
		global $dbTables;
		dbRoot::clearCache("Defaults");
		$this->assertArrayNotHasKey("Defaults",$dbTables);
	}

	/**
	 * @depends testDefaultsCacheLoaded
	 */
	function testDefaultsCacheShowNameOK(){
		$defs=dbRoot::fromCache("Defaults",1);		
		$this->assertEquals("BHS",$defs->ShowName);
	}
	
	
	/**
	 * @depends testDefaultsCacheLoaded
	 */	
	function testDefaultsCached(){
		$defs1=dbRoot::fromCache("Defaults",1);
		$defs2=dbRoot::fromCache("Defaults",1);
		
		$this->assertSame($defs1,$defs2);
	}

}
?>