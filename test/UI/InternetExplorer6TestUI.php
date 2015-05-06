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

class InternetExplorer6Test extends uitests
{
	
	protected function setUp()
	{
		$this->setHost("IE6.WinXP.selenium");
		$this->setBrowser('iexplorer');
		$this->setPort(5555);
		$this->setBrowserUrl('http://nick-xps/workspace/showmanager/');
	}

}

?>

