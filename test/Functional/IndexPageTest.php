<?php
include_once('ons_common.php');

class IndexPageTest extends ONS_Tests_DatabaseTestCase
{
	public $tables=array("Defaults","Exhibition");
	
	function FileName(){
		return "Pages/Index";
	}

	function testPageTitleNoShow(){
		truncateTable("Defaults");
		$this->expectOutputString("<title>Show Manager".(isset($GLOBALS['TESTMODE'])?":".$GLOBALS['TESTMODE']:"")."</title>");
		PageTitle();
		print_pre($GLOBALS['defs']);		
	}
	
	function testPageTitle(){
		$this->expectOutputString("<title>Show Manager".(isset($GLOBALS['TESTMODE'])?":".$GLOBALS['TESTMODE']:"")."</title><div align='center'><h1>BHS</h1><h2>Summer Show 2012</h2></div><link href='http://nick-xps/css/style.css' media='all' rel='stylesheet' type='text/css' /><table><tr><td><a class='Button' href='http://nick-xps'><span>Home</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Exhibition.php'><span>Shows</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Exhibitionsection.php'><span>Sections</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Exhibitionclass.php'><span>Classes</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Prize.php'><span>Prizes</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Trophy.php'><span>Trophies</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Sponsorship.php'><span>Sponsorship</span></a>
</td><td><a class='Button' href='http://nick-xps/database/Exhibitionexhibitor.php'><span>Competitors</span></a>
</td><td><a class='Button' href='http://nick-xps/pages/results.php'><span>Results</span></a>
</td><td><a class='Button' href='http://nick-xps/pages/summary.php'><span>Summary</span></a>
</td></tr></table><hr/>");
		PageTitle();
		print_pre($GLOBALS['defs']);
		
	}
}
?>