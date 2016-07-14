<?php
include_once('ons_common.php');

class LoadDatabase {//extends ONS_Tests_DatabaseTestCase {
        static $dns;
    
	protected $filename;
        
        static function loadRunSQL($dns,$version,$filename=null) {
            $sqlpath=buildpath($dns['class_location'],"sql",$version,$filename);
            if (!file_exists($sqlpath)) {
                error_log("No file $sqlpath");
                return "";            
            }
            return "\n".file_get_contents($sqlpath)."\n";
        }
        
	static function testInitaliseDatabase($forceLoad=false,$version="showmanager_v20150502"){
            if (isset(LoadDatabase::$dns) and !$forceLoad) return true;
                
            $dns=SplitDataObjectConfig();
            $target="test";
            $migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","Migrations");
            //May be whole file....               
            $sql=LoadDatabase::loadRunSQL($dns, "$version.sql");
            //leaf tables
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "migration_info.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "class.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibition.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "prize.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "section.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibitor.sql");

            //requires exhibition. 
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaults.sql");                               
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "trophy.sql");                               

            //requires exhibition and section. 
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibitionsection.sql");                               

            //requires exhibition and exhibitor. 
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibitionexhibitor.sql");                               

            //requires exhibition and exhibitionsection. 
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibitionclass.sql");

            //requires trophy and exhibitionclass. 
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibitiontrophyclass.sql");

            //requires exhibitionexhibitor and exhibitionclass. 
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "exhibitionclassprize.sql");

            //requires exhibitionclassprize
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "sponsorship.sql");                                              

            //Views
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaultexhibitiontrophyclass.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaultprizefund.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "trophyresults.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaultexhibitionsection.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaultexhibitionexhibitor.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaultexhibitionclassprize.sql");
            $sql.= LoadDatabase::loadRunSQL($dns, $version, "defaultexhibitionclass.sql");

            //$sql.= LoadDatabase::loadRunSQL($dns, $version, "defaults.sql");                               

            if (trim($sql)=="") return false;
            
            $sql="DROP DATABASE IF EXISTS {$dns['database']};\nCREATE DATABASE IF NOT EXISTS {$dns['database']};\nUSE {$dns['database']};\n".$sql;

            file_put_contents("/tmp/sql.sql", $sql);

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
            return true;
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