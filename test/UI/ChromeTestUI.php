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

class ChromeTest extends uitests
{
	
	protected function setUp()
	{
		$this->setHost("GC26.WinXP.selenium");
		$this->setBrowser('chrome');
		$this->setBrowserUrl('http://nick-xps');
	}

}

?>

