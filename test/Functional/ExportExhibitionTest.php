<?php

include_once('ons_common.php');

class ExportExportTest extends PHPUnit_Framework_TestCase {

    private $filename='ExportSummer2015.xml';

    function drpGatherObjects(){
        return array(
/**/
            'Summer Show 2008'=>array(1,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(0,0),
                                        "section"=>array(0,0),
 
                                        "exhibitionclass"=>array(0,0),
                                        "class"=>array(0,0),
 
                                        "exhibitionclassprize"=>array(0,0),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(0,0),
                                        "trophy"=>array(0,0),
 
                                        "exhibitionexhibitor"=>array(0,0),
                                        "exhibitor"=>array(0,0), 
                                )),
/**/
            'Spring Show 2009'=>array(2,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(1,1),
                                        "section"=>array(1,1),
 
                                        "exhibitionclass"=>array(1,1),
                                        "class"=>array(1,1),
 
                                        "exhibitionclassprize"=>array(3,3),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(0,0),
                                        "trophy"=>array(0,0),
 
                                        "exhibitionexhibitor"=>array(0,0),
                                        "exhibitor"=>array(0,0),
                                )),
/**/
            'Summer Show 2009'=>array(3,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(10,10),
                                        "section"=>array(10,10),
 
                                        "exhibitionclass"=>array(56,56),
                                        "class"=>array(56,56),
 
                                        "exhibitionclassprize"=>array(167,167),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(13,13),
                                        "trophy"=>array(3,3),
 
                                        "exhibitionexhibitor"=>array(0,0),
                                        "exhibitor"=>array(0,0), 
                                )),
/**/
            'Spring show 2010'=>array(4,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(0,0),
                                        "section"=>array(0,0),
 
                                        "exhibitionclass"=>array(0,0),
                                        "class"=>array(0,0),
 
                                        "exhibitionclassprize"=>array(0,0),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(0,0),
                                        "trophy"=>array(0,0),
 
                                        "exhibitionexhibitor"=>array(0,0),
                                        "exhibitor"=>array(0,0), 
                                )),
/**/
            'Summer Show 2010'=>array(5,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(10,10),
                                        "section"=>array(10,10),
 
                                        "exhibitionclass"=>array(87,87),
                                        "class"=>array(87,87),
 
                                        "exhibitionclassprize"=>array(261,261),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(152,152),
                                        "trophy"=>array(6,6),
 
                                        "exhibitionexhibitor"=>array(0,82),
                                        "exhibitor"=>array(0,82), 
                                )),
/**/
            'Spring Show 2011'=>array(6,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(1,1),
                                        "section"=>array(1,1),
 
                                        "exhibitionclass"=>array(33,33),
                                        "class"=>array(33,33),
 
                                        "exhibitionclassprize"=>array(99,99),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(33,33),
                                        "trophy"=>array(1,1),
 
                                        "exhibitionexhibitor"=>array(0,31),
                                        "exhibitor"=>array(0,31), 
                                )),
/**/
            'Summer Show 2011'=>array(7,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(10,10),
                                        "section"=>array(10,10),
 
                                        "exhibitionclass"=>array(98,98),
                                        "class"=>array(93,93),
 
                                        "exhibitionclassprize"=>array(294,294),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(280,280),
                                        "trophy"=>array(12,12),
 
                                        "exhibitionexhibitor"=>array(0,77),
                                        "exhibitor"=>array(0,77), 
                                )),
/**/
            'Spring Show 2012'=>array(8,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(2,2),
                                        "section"=>array(2,2),
 
                                        "exhibitionclass"=>array(38,38),
                                        "class"=>array(38,38),
 
                                        "exhibitionclassprize"=>array(114,114),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(38,38),
                                        "trophy"=>array(1,1),
 
                                        "exhibitionexhibitor"=>array(0,21),
                                        "exhibitor"=>array(0,21), 
                                )),
/**/
            'Summer Show 2012'=>array(9,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(10,10),
                                        "section"=>array(10,10),
 
                                        "exhibitionclass"=>array(105,105),
                                        "class"=>array(100,100),
 
                                        "exhibitionclassprize"=>array(315,315),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(180,180),
                                        "trophy"=>array(7,7),
 
                                        "exhibitionexhibitor"=>array(0,83),
                                        "exhibitor"=>array(0,83), 
                                )),
/**/
            'Spring Show 2013'=>array(10,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(1,1),
                                        "section"=>array(1,1),
 
                                        "exhibitionclass"=>array(38,38),
                                        "class"=>array(38,38),
 
                                        "exhibitionclassprize"=>array(114,114),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(0,0),
                                        "trophy"=>array(0,0),
 
                                        "exhibitionexhibitor"=>array(0,19),
                                        "exhibitor"=>array(0,19),
                                )),
/**/
            'Summer Show 2013'=>array(11,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(10,10),
                                        "section"=>array(10,10),
 
                                        "exhibitionclass"=>array(144,144),
                                        "class"=>array(100,100),
 
                                        "exhibitionclassprize"=>array(432,432),
                                        "sponsorship"=>array(38,38),
 
                                        "exhibitiontrophyclass"=>array(339,339),
                                        "trophy"=>array(13,13),
 
                                        "exhibitionexhibitor"=>array(0,118),
                                        "exhibitor"=>array(0,118), 
                                )),
/**/
            'Spring Show 2014'=>array(12,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(1,1),
                                        "section"=>array(1,1),
 
                                        "exhibitionclass"=>array(41,41),
                                        "class"=>array(40,40),
 
                                        "exhibitionclassprize"=>array(123,123),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(0,0),
                                        "trophy"=>array(0,0),
 
                                        "exhibitionexhibitor"=>array(0,3),
                                        "exhibitor"=>array(0,3), 
                                )),
/**/
            'Spring Show 2015'=>array(13,array(
                                        "exhibition"=>array(1,1),
                                        "prize"=>array(3,3),
 
                                        "exhibitionsection"=>array(1,1),
                                        "section"=>array(1,1),
 
                                        "exhibitionclass"=>array(40,40),
                                        "class"=>array(39,39),
 
                                        "exhibitionclassprize"=>array(0,0),
                                        "sponsorship"=>array(0,0),
 
                                        "exhibitiontrophyclass"=>array(0,0),
                                        "trophy"=>array(0,0),
 
                                        "exhibitionexhibitor"=>array(0,4),
                                        "exhibitor"=>array(0,4), 
                                )),
/**/
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
     * @large
     * @dataProvider drpGatherObjects
     */
    function testGatherDataObjectsNoExhibitors($exhibition,$tablecounts){
        $do = dbRoot::fromCache("Exhibition", $exhibition);
        $a = array();
        $do->gatherExportDataObjects($a);

        $this->assertNotCount(0,$a,"Has Exhibition Number $exhibition");

        foreach ($tablecounts as $table=>$counts){
            if ($counts[0]==0) {
                $this->assertArrayNotHasKey($table, $a, "Has No $table");
            } else {
                $this->assertArrayHasKey($table, $a, "Has $table");
                $this->assertCount($counts[0],$a[$table],$table." = ".print_r($a[$table],true));
            }
        }
    }

    /**
     * @depends testResetDatabase
     * @large
     * @dataProvider drpGatherObjects
     */
    function testGatherDataObjectsExhibitors($exhibition,$tablecounts){
        $do = dbRoot::fromCache("Exhibition", $exhibition);
        $a = array();
        $do->gatherExportDataObjects($a,true);

        $this->assertNotCount(0,$a,"Has Exhibition Number $exhibition");

        foreach ($tablecounts as $table=>$counts){
            if ($counts[1]==0) {
                $this->assertArrayNotHasKey($table, $a, "Has No $table");
            } else {
                $this->assertArrayHasKey($table, $a, "Has $table");
                $this->assertCount($counts[1],$a[$table],$table." = ".print_r($a[$table],true));
            }
        }
    }

    /**
     * @depends testResetDatabase
     * @todo
     * @large
     */
    function testExport() {
   }

    /**
     * @depends testExport
     * @depends testGatherDataObjectsExhibitors
     * @todo
     * @large
     */
    function testExportExhibitors() {
    }
/**/
}
