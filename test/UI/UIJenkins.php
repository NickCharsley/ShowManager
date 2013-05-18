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

class UIJenkins extends PHPUnit_Framework_TestCase
{

	/*
	 *
	 */
	function testUIJenkinsActive(){
		$this->assertEquals(true,false);
	}

}

//************************************************
error_log("Exit ".__FILE__);
?>

