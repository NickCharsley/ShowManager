<?php
/*
 * File testDOT
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

class Jenkins extends PHPUnit_Framework_TestCase
{

	/*
	 * We set this to fail so it tells us this Directory is Active :)
	 * It is excluded from normal tests, we have to get it by asking to test Jenkins.php :)
	 */
	function testRootJenkinsActive(){
		$this->assertEquals(true,false);
	}

}

//************************************************
error_log("Exit ".__FILE__);
?>

