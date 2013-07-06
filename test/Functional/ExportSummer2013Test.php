<?php
include_once('ons_common.php');

class ExportSummer2013Test extends ONS_Tests_DatabaseTestCase
{
    public $tables=array("ExhibitionClass","ExhibitionSection","Defaults","Exhibition","Section","Class","Trophy","ExhibitionTrophyClass","Prize","ExhibitionClassPrize");

    function FileName(){
        return "ShowManager/Summer2013";            
    }
    
    public function ListProvider(){
        return array(
                array(""),
            );
    }

    function testGatherDataObjectsScopeIsCorrect(){
        $do=dbRoot::fromCache("Exhibition", 11);
        $a=array();
        $do->gatherExportDataObjects($a);
        $this->assertArrayHasKey("exhibition",$a);
        $this->assertArrayHasKey("exhibitionclass",$a);
        $this->assertArrayHasKey("exhibitiontrophyclass",$a);
        $this->assertArrayHasKey("exhibitionclassprize",$a);
        $this->assertArrayHasKey("exhibitionsection",$a);
        $this->assertArrayHasKey("class",$a);
        $this->assertArrayHasKey("exhibition",$a);
        $this->assertArrayHasKey("prize",$a);
        $this->assertArrayHasKey("section",$a);
        $this->assertArrayHasKey("sponsorship",$a);
        $this->assertArrayHasKey("trophy",$a);
        //But Not....
        $this->assertArrayNotHasKey("exhibitor",$a);
        $this->assertArrayNotHasKey("exhibitionexhibitor",$a);
    }
    
    /**
     * @depends testGatherDataObjectsScopeIsCorrect
     */ 
    function testGatherDataObjectsExhibitorsScopeIsCorrect(){
        $a=array();
        $do=dbRoot::fromCache("Exhibition", 11);
        $do->gatherExportDataObjects($a,true);
        $this->assertArrayHasKey("exhibitor",$a);
        $this->assertArrayHasKey("exhibitionexhibitor",$a);
    }

    /**
     * @depends testGatherDataObjectsScopeIsCorrect
     */
    function testExport(){
        
        $this->assertEquals("", doExhibition::Export(11));
    }
    /**
     * @depends testExport
     * @depends testGatherDataObjectsExhibitorsScopeIsCorrect
     */
    function testExportExhibitors(){
        
        $this->assertEquals("", doExhibition::Export(11,true));
    }
   
}
?>