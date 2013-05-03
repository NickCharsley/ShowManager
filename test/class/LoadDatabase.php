<?php
include_once('ons_common.php');

class LoadDatabase extends ONS_Tests_DatabaseTestCase {
		
	protected $filename;
	
	function __construct($filename,$tables){
		$this->filename=$filename;
		$this->tables=$tables;
		
		parent::__construct();
	}
	
	function FileName(){
		return $this->filename;
	}
	
	function testInitaliseDatabase(){
		$this->assertEquals(1,1);
	}
	
	function ResetDB(){
		global $config;			
		
		print_line("ResetDB Called");
		print_pre($this->tables);
		
		$db_name=split("/",$config['DB_DataObject']['database']);
		
		//mysql://showmanager:AA5md9qXNdBSKMVp@localhost/showmanager
		
		//$dsn=preg_split();
		
		$GLOBALS["DB_DSN"]="mysql:host=localhost;dbname=test_adhoc_showmanager";
		$GLOBALS["DB_USER"]="root";
		$GLOBALS["DB_PASSWD"]="sas0527";
		$GLOBALS["DB_DBNAME"]=$db_name[count($db_name)-1];
		$GLOBALS["DB_SYNCNAME"]=str_replace("test_","",str_replace("adhoc_","",$db_name[count($db_name)-1]));
		$GLOBALS["DB_DEBUG"]="0";
				
		$this->setUp();
	}
	
}
?>