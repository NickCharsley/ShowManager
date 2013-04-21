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
		$GLOBALS['UIROOT']='http://show'.(isset($GLOBALS['TESTMODE'])?".".$GLOBALS['TESTMODE']:".local");
		$this->setHost("FF20.WinXP.selenium");
		$this->setBrowser('firefox');
		$this->setBrowserUrl($GLOBALS['UIROOT']);
	}

}

?>

