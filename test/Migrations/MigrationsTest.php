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

class MigrationsTest extends PHPUnit_Framework_TestCase
{
    function testDatabaseActivated(){
        global $db;
        $this->assertNotNull($db);
    }
    
    /**
     * @depends testDatabaseActivated
     */
    function testRunDBScript(){
        $dns=SplitDataObjectConfig();
        $sqlpath=buildpath($dns['class_location'],"sql","showmanager_v3.sql");
        //$migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","Migrations");
        
        $sql=  file_get_contents($sqlpath);
        
        $sql="DROP DATABASE IF EXISTS {$dns['database']};\nCREATE DATABASE IF NOT EXISTS {$dns['database']};\nUSE {$dns['database']};\n".$sql;
        
        executeScript($sql);
        
        $this->assertTrue(true);
        
    }

    /**
     * @depends testRunDBScript
     * @expectedException Exception
     * @expectedExceptionMessage Exit Called: Migration Finished
     */
    function testRunMigration004(){
        $target="test_adhoc";
        $dns=SplitDataObjectConfig();
        //$sqlpath=buildpath($dns['class_location'],"sql","showmanager_v3.sql");
        $migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","Migrations");
        
        $phpdbmigrate= 
            array(
                $target => array(
                    "db" => $dns,
                    ),
                "migrations_path" => $migrationPath,
                "return_type" => "\n",
                );
        $lib = new PHPDbMigrate($phpdbmigrate);
        $lib->run(004,$target);
    }

    /**
     * @depends testRunMigration004
     * @expectedException Exception
     * @expectedExceptionMessage Exit Called: Migration Finished
     */
    function testRunMigration005(){
        $target="test_adhoc";
        $dns=SplitDataObjectConfig();
        //$sqlpath=buildpath($dns['class_location'],"sql","showmanager_v3.sql");
        $migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","Migrations");
        
        $phpdbmigrate= 
            array(
                $target => array(
                    "db" => $dns,
                    ),
                "migrations_path" => $migrationPath,
                "return_type" => "\n",
                );
        $lib = new PHPDbMigrate($phpdbmigrate);
        $lib->run(005,$target);
    }

    /**
     * @depends testRunMigration004
     * @depends testRunMigration005
     * @expectedException Exception
     */
    function testRunMigrationAll(){
        $target="test_adhoc";
        $dns=SplitDataObjectConfig();
        $migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","Migrations");
        
        $phpdbmigrate= 
            array(
                $target => array(
                    "db" => $dns,
                    ),
                "migrations_path" => $migrationPath,
                "return_type" => "\n",
                );
        $lib = new PHPDbMigrate($phpdbmigrate);
        $lib->run(null,$target);
    }

    
}

//************************************************
error_log("Exit ".__FILE__);
?>

