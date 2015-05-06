<?php
include_once('ons_common.php');

class ImportSummer2014Test extends PHPUnit_Framework_TestCase
{    
    function DataRowProvider(){
        return array(
               array("exhibition",array(1,10,10),1),//0
               array("prize",array(1,3,3),0),//1
               array("class",array(1,182,182),33),//2
               array("exhibitionclass",array(1,492,486),144),//3
               array("exhibitionclassprize",array(95,1072,827),432),//4
               array("exhibitionexhibitor",array(1,318,313),0),//5
               array("exhibitionsection",array(1,45,45),10),//6
               array("exhibitiontrophyclass",array(1,770,716),339),//7
               array("exhibitor",array(1,214,214),0),//8
               array("section",array(1,15,15),0),//9
               array("sponsorship",array(1,23,23),38),//10
               array("trophy",array(2,36,34),13),//11
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
     * @depends testPreMaxCorrect     
     * @depends testPreMaxCorrect     
     */
    function testLoadImport(){              
        $this->assertTrue(dbRoot::Import(buildPath(__DIR__,'..','testData','ShowManager','ImportSummer2014.xml')));
    }

    /**
     * @depends testLoadImport
     * @dataProvider DataRowProvider
     */
    function testPostMinCorrect($table,$pre,$post){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals(0, $row['min']-$pre[0]);
    }
    
    /**
     * @depends testLoadImport
     * @dataProvider DataRowProvider
     */
    function testPostMaxCorrect($table,$pre,$post){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($post, $row['max']-$pre[1]);
    }
    
    /**
     * @depends testLoadImport
     * @dataProvider DataRowProvider
     */
    function testPostCountCorrect($table,$pre,$post){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($post, $row['count']-$pre[2]);
    }
    
    
}
?>