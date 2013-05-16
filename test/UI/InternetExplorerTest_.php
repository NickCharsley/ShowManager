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

class InternetExplorerTest extends uitests
{
	
	protected function setUp()
	{
		$this->setHost("FF20.WinXP.selenium");
		$this->setBrowser('iexplorer');
		$this->setBrowserUrl('http://nick-xps/workspace/showmanager/');
	}

}

?>

