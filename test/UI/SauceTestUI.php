<?php
/*
 * File SauceTest
 * Created on  by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright  ONS
 *
 */
if (!defined("__COMMON__"))
 	include_once 'ons_common.php';
error_log("Enter ".__FILE__);
//************************************************

class SauceTest extends PHPUnit_Extensions_SeleniumTestCase_SauceOnDemandTestCase {

	public static $browsers = array(
			array(
					'name'           => 'Firefox 3.6 on Windows',
					'os'             => 'Windows 2003',
					'browser'        => 'firefox',
					'browserVersion' => '3.6.'
			),
			array(
					'name'           => 'Google Chrome on Windows',
					'os'             => 'Windows 2003',
					'browser'        => 'googlechrome',
					'browserVersion' => ''
			),
			array(
					'name'           => 'Internet Explorer 8 on Windows',
					'os'             => 'Windows 2003',
					'browser'        => 'iexplore',
					'browserVersion' => '8.'
			)
	);

	function setUp() {
		$this->setBrowserUrl('http://example.saucelabs.com');
	}

	function test_example() {
		$this->open('/');
		$this->assertTitle('Sauce Labs: Automated or Manual Cross Browser Testing For Mobile Apps and Web.');
	}
}

//** Debug Code **************************
if (str_replace("/","\\",__FILE__)==str_replace("/","\\",$_SERVER["SCRIPT_FILENAME"]))
{
	phpinfo();
}
//************************************************
error_log("Exit ".__FILE__);
?>