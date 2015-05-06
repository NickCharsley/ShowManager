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
	class testmode_selenium extends PHPUnit_Extensions_Selenium2TestCase
	{
		protected $coverageScriptUrl = 'http://show.adhoc/phpunit_coverage.php';
		protected $uiroot= 'http://show.adhoc';
	}
} else {
	class testmode_selenium extends PHPUnit_Extensions_Selenium2TestCase
	{
		protected $coverageScriptUrl = 'http://show.test/phpunit_coverage.php';
		protected $uiroot= 'http://show.test';
	}
}

class selenium extends testmode_selenium
{
	public static $seleneseDirectory = 'C:\\Users\\nick\\workspace\\ShowManager\\test\\\\Selenium';
}

?>

