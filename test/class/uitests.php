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

class uitests extends PHPUnit_Extensions_Selenium2TestCase
{	

	protected $coverageScriptUrl = 'http://nick-xps/phpunit_coverage.php';
	
	public function testTitle()
	{
		$this->url($this->getBrowserUrl().'/workspace/showmanager/');
		$this->assertEquals('', $this->title());
	}
}

?>

