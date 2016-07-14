<?php
include_once('ons_common.php');

class LoadBaseTest extends PHPUnit_Framework_TestCase
{    
    function drpFullDatabase(){
        return array(
               "exhibition"=>array("exhibition",array(1,13,13)),
               "prize"=>array("prize",array(1,3,3)),
               "class"=>array("class",array(1,231,225)),
               "exhibitionclass"=>array("exhibitionclass",array(1,794,681)),
               "exhibitionclassprize"=>array("exhibitionclassprize",array(95,2650,1922)),
               "exhibitionexhibitor"=>array("exhibitionexhibitor",array(1,450,438)),
               "exhibitionsection"=>array("exhibitionsection",array(1,56,56)),
               "exhibitiontrophyclass"=>array("exhibitiontrophyclass",array(1,1109,1035)),
               "exhibitor"=>array("exhibitor",array(1,315,313)),
               "section"=>array("section",array(1,16,16)),
               "sponsorship"=>array("sponsorship",array(24,61,38)),
               "trophy"=>array("trophy",array(2,49,47)),
                    );
    }                
    
    /**
     * @medium
     */
    function testResetDatabase(){
        $this->assertTrue(LoadDatabase::testInitaliseDatabase(true));
    }
    
    /**
     * @depends testResetDatabase
     * @medium
     * @dataProvider drpFullDatabase
     */
    function testMinCorrect($table,$pre){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($pre[0], $row['min']);
    }
    
    /**
     * @depends testResetDatabase
     * @medium
     * @dataProvider drpFullDatabase
     */
    function testMaxCorrect($table,$pre){
        global $db;
        $sql="select min(id) `min`,max(id) `max`,count(*) `count` from $table";
        $res =& $db->query($sql);
        $row = $res->fetchRow();
        $this->assertEquals($pre[1], $row['max']);
    }
}
