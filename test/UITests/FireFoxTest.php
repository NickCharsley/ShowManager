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

class FireFoxTest extends uitests
{
	
	protected function setUp()
	{
		$this->setHost("FF20.WinXP.selenium");
		$this->setBrowser('firefox');
		$this->setBrowserUrl('http://nick-xps'.(isset($GLOBALS['TESTMODE'])?".".$GLOBALS['TESTMODE']:""));
	}

}

?>

