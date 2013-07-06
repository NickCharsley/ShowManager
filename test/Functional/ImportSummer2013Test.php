<?php
include_once('ons_common.php');

class ImportSummer2013Test extends PHPUnit_Framework_TestCase
{
    function testLoadImport(){
        LoadDatabase::testInitaliseDatabase(true);
        
        $this->assertTrue(dbRoot::Import(buildPath(__DIR__,'..','testData','ShowManager','ImportSummer2013.xml')));
    }
}
?>