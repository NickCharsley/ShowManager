<?php
include_once('ons_common.php');

class ImportSummer2014Test extends PHPUnit_Framework_TestCase
{    
    function DataRowProvider(){
        return array(
               array("exhibition",array(1,10,10),array(1,11,11)),
               array("prize",array(1,3,3),array(1,3,3)),
               array("class",array(1,182,182),array(1,225,225)),
               array("exhibitionclass",array(1,492,486),array(1,11,11)),
              
                    );
    }                
    
    function testResetDatabase(){
        global $db;
        $this->assertTrue(LoadDatabase::testInitaliseDatabase(true));
    }
    
    /**
     * @depends testResetDatabase
     * @dataProvider DataRowProvider
     */
    function testPreMinCorrect($table,$pre,$post){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($pre[0], $row['min']);
    }
    
    /**
     * @depends testResetDatabase
     * @dataProvider DataRowProvider
     */
    function testPreMaxCorrect($table,$pre,$post){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($pre[1], $row['max']);
    }
    
    /**
     * @depends testResetDatabase
     * @dataProvider DataRowProvider
     */
    function testPreCountCorrect($table,$pre,$post){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($pre[2], $row['count']);
    }

    /**
     * @depends testResetDatabase
     * @depends testPreMinCorrect     
     */
    function testLoadImport(){              
        //$this->assertTrue(dbRoot::Import(buildPath(__DIR__,'..','testData','ShowManager','ImportSummer2014.xml')));
    }
}
?>