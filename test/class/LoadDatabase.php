<?php
include_once('ons_common.php');

class LoadDatabase {//extends ONS_Tests_DatabaseTestCase {
        static $dns;
    
	protected $filename;
/** /
	function __construct($filename,$tables){
		$this->filename=$filename;
		$this->tables=$tables;
		
		parent::__construct();
	}
/** /	
	function FileName(){
		return $this->filename;
	}
/**/	
	static function testInitaliseDatabase($forceLoad=false){
            if (!isset(LoadDatabase::$dns) or $forceLoad){
                $dns=SplitDataObjectConfig();
                $target="test";
                $sqlpath=buildpath($dns['class_location'],"sql","showmanager_v3.sql");
                $migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","Migrations");

                $sql=  file_get_contents($sqlpath);

                $sql="DROP DATABASE IF EXISTS {$dns['database']};\nCREATE DATABASE IF NOT EXISTS {$dns['database']};\nUSE {$dns['database']};\n".$sql;

                executeScript($sql);
                
                LoadDatabase::$dns=$dns;                
                
                $phpdbmigrate= 
                    array(
                        $target => array(
                            "db" => $dns,
                            ),
                        "migrations_path" => $migrationPath,
                        "return_type" => "\n",
                        );
                $lib = new PHPDbMigrate($phpdbmigrate);
                try {
                    $lib->run(null,$target);                
                } catch (Exception $e){
                    //Should really check if this was OK.
                    //Bit problamatic, successful finish
                    //should NOT throw an exception, that is lazy!
                }
            }
    	}
/** /	
	function ResetDB(){
		global $config;			
		
		print_line("ResetDB Called");
		print_pre($this->tables);
		
		$db_name=split("/",$config['DB_DataObject']['database']);
		
		//mysql://showmanager:AA5md9qXNdBSKMVp@localhost/showmanager
		
		//$dsn=preg_split();
		
		$GLOBALS["DB_DSN"]="mysql:host=localhost;dbname=test_adhoc_showmanager";
		$GLOBALS["DB_USER"]="test";
		$GLOBALS["DB_PASSWD"]="sas0527";
		$GLOBALS["DB_DBNAME"]=$db_name[count($db_name)-1];
		$GLOBALS["DB_SYNCNAME"]=str_replace("test_","",str_replace("adhoc_","",$db_name[count($db_name)-1]));
		$GLOBALS["DB_DEBUG"]="0";
				
		$this->setUp();
	}
/**/	
}
?>