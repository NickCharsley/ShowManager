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

class FunctionalJenkinsTest extends PHPUnit_Framework_TestCase
{
	function __construct($name = NULL, array $data = array(), $dataName = ''){
		error_log("Initialised ".get_class($this));
		parent::__construct($name, $data, $dataName);
	}

	/*
	 *
	 */
	function testJenkinsActive(){
		$this->assertEquals(true,true);
	}

}

//************************************************
error_log("Exit ".__FILE__);
?>

