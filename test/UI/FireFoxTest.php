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

class FireFoxTest extends uitests {
			 	
	public static $browsers = array(
			array(
					'name'           => 'Firefox 3.6 on Windows',
					'os'             => 'Windows 2003',
					'browser'        => 'firefox',
					'browserVersion' => '3.6.'
			),
/*			array(
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
*/	);
	
	protected function setUp()
	{
		$this->setBrowserUrl($this->uiroot);
	}
}

?>

