<?php
/*
 * File WebTest
 * Created on  by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright  ONS
 *
 */
if (!defined("__COMMON__"))
 	include_once 'ons_common.php';
//************************************************

if ($GLOBALS['TESTMODE']=="adhoc"){
	class testmode_uitests extends PHPUnit_Extensions_SeleniumTestCase_SauceOnDemandTestCase
	{
		protected $coverageScriptUrl = 'http://show.adhoc/phpunit_coverage.php';
		protected $uiroot= 'http://show.adhoc';

		function __construct($name = NULL, array $data = array(), $dataName = ''){
			error_log("Initialised ".get_class($this));
			parent::__construct($name, $data, $dataName);
		}
	}
} else {
	class testmode_uitests extends PHPUnit_Extensions_SeleniumTestCase_SauceOnDemandTestCase
	{
		protected $coverageScriptUrl = 'http://show.test/phpunit_coverage.php';
		protected $uiroot= 'http://show.test';

		function __construct($name = NULL, array $data = array(), $dataName = ''){
			error_log("Initialised ".get_class($this));
			parent::__construct($name, $data, $dataName);
		}

	}
}

class uitests extends testmode_uitests
{
	/**
	 * Not really a test,
	 * this just us a place to hang
	 * the stamp of class name into error log :)
	 */

	function testClassInit(){
		error_log("Initialised ".get_class($this));
		$this->assertEquals(true,true);
	}

	public function PageProvider(){
		return
		array (
				array(""),
				array("/database/Exhibition.php"),
				array("/database/Exhibitionsection.php"),
				array("/database/Exhibitionclass.php"),
				array("/database/Prize.php"),
				array("/database/Trophy.php"),
				array("/database/Sponsorship.php"),
				array("/database/Exhibitionexhibitor.php"),
				array("/pages/results.php"),
				array("/pages/summary.php"),
		);
	}


	function testLoadPage()
	{
		foreach ($this->PageProvider() as $page)
			$this->subLoadPage($page[0]);
	}

	function subLoadPage($page){
		$this->open($this->uiroot.$page);
		$this->assertTitle('Show Manager'.(isset($GLOBALS['TESTMODE'])?":".$GLOBALS['TESTMODE']:""));
	}


	/*
	 * depends testLoadPage
	*/
	public function testPageMenu()
	{
		foreach ($this->PageProvider() as $page)
			$this->subPageMenu($page[0]);
	}

	/**
	 * @dataProvider PageProvider
	 */
	public function subPageMenu($page)
	{
			$this->open($this->uiroot.$page);
			$elements= $this->elements($this->using('css selector')->value('span'));

			//print_r($elements);

			$this->assertGreaterThan(0,count($elements));

			$this->assertEquals("Home",$elements[0]->text());
//			$this->assertEquals("Shows", $this->getText("//td[2]/a/span"));
//			$this->assertEquals("Sections", $this->getText("//td[3]/a/span"));
//			$this->assertEquals("Classes", $this->getText("//td[4]/a/span"));
//			$this->assertEquals("Prizes", $this->getText("//td[5]/a/span"));
//			$this->assertEquals("Trophies", $this->getText("//td[6]/a/span"));
//			$this->assertEquals("Sponsorship", $this->getText("//td[7]/a/span"));
//			$this->assertEquals("Competitors", $this->getText("//td[8]/a/span"));
//			$this->assertEquals("Results", $this->getText("//td[9]/a/span"));
//			$this->assertEquals("Summary", $this->getText("//td[10]/a/span"));
//			$this->assertEquals("BHS", $this->getText("css=h1"));
//			$this->assertEquals("Summer Show 2012", $this->getText("css=h2"));
//			$this->assertTrue($this->isElementPresent("css=hr"));
	}
/*
 * 158
    );
    protected function setUp()
    {
        $this->setBrowserUrl('http://www.example.com/');
    }
    public function testTitle()
    {
        $this->open('http://www.example.com/');
        $this->assertTitle('Example Web Page');
    }
}
?>
Table 17.2. Assertions
assertElementValueEquals(string $locator, string $text)
	Reports an error if the value of the element identified by $locator is not equal to the given $text.
assertElementValueNotEquals(string $locator, string $text)
	Reports an error if the value of the element identified by $locator is equal to the given $text.
assertElementValueContains(string
$locator, string $text)
Reports an error if the value of the element
identified by $locator does not contain the
given $text.
void
assertElementValueNotContains(string
$locator, string $text)
Reports an error if the value of the element
identified by $locator contains the given
$text.
void
assertElementContainsText(string
$locator, string $text)
Reports an error if the element identified by
$locator does not contain the given $text.
void
assertElementNotContainsText(string
$locator, string $text)
Reports an error if the element identified by
$locator contains the given $text.
void
assertSelectHasOption(string
$selectLocator, string $option)
Reports an error if the given option is not
available.PHPUnit and Selenium
159
Assertion Meaning
void
assertSelectNotHasOption(string
$selectLocator, string $option)
Reports an error if the given option is available.
void
assertSelected($selectLocator,
$option)
Reports an error if the given label is not selected.
void
assertNotSelected($selectLocator,
$option)
Reports an error if the given label is selected.
void assertIsSelected(string
$selectLocator, string $value)
Reports an error if the given value is not
selected.
void assertIsNotSelected(string
$selectLocator, string $value)
Reports an error if the given value is selected.
 *
 *
 */



}

?>

