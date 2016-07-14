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
    /**
     * @medium
     */
    function testResetDatabase(){
        $this->assertTrue(LoadDatabase::testInitaliseDatabase(true,"showmanager_v3"));
    }
    
    /**
     * @depends testResetDatabase
     * @medium
     * @expectedException Exception
     * @expectedExceptionMessage Exit Called: Migration Finished
     */
    function testRunMigration004(){
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
        $lib->run(004,$target);
    }

    /**
     * @depends testRunMigration004
     * @medium
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
     * @depends testRunMigration005
     * @medium
     * @expectedException Exception
     * @expectedExceptionMessage Exit Called: Migration Finished
     */
    function testRunMigrationAll(){
        $target="test_adhoc";
        $dns=SplitDataObjectConfig();
        $migrationPath=buildpath(dirname(dirname(__FILE__)),"testData","OldMigrations");
        
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
    
    /**
     * @depends testRunMigrationAll
     * @medium
     * @expectedException Exception
     * @expectedExceptionMessage Exit Called: Database is currently at version 5
     */
    function testRunMigrationAllLatestBase(){

        //Load Latest SQL
        $this->assertTrue(LoadDatabase::testInitaliseDatabase(true));

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

