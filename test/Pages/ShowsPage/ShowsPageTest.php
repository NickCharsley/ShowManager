<?php
include_once('ons_common.php');

class ShowsPageTest extends ShowsPage 
{    
    function setUp(){
        $this->defaults=3;
        parent::setUp();
        dbRoot::clearCache("Defaults");                
    }

    public function validSetup() {
        $this->assertEquals(3,$this->defaults);
        $defs=dbRoot::fromCache("Defaults", 1);
        $this->assertEquals(1,$defs->ID);    
        $this->assertNotEquals(9,$defs->ShowID);
        $this->assertEquals("BHS",$defs->ShowName);                
    }
        /**
         * test setup worked
         */
        function testSetupWorked(){
            $this->validSetup();
        }
        
        /**
         * tests buildPageTitle() 
         * @depends testSetupWorked
         */
        function testBuildPageTitle() {                        
            $data=buildPageTitle();
            if ($this->defaults==1) {
                $this->assertFalse($data[0]);
            } else { 
                $this->assertTrue($data[0]);
            }
            $this->assertEquals($this->getExpectedPageTitle(), $data[1]);        
        }                
        
        /**
         * @depends testSetupWorked
         * @depends testBuildPageTitle
         * 
         * check old method of direct printing and new string method return the 
         * same data. Will become obsolete when we refactor :
         */
        function testShowPageTitle() {
            global $button_css;
            $data=buildPageTitle();
            $this->expectOutputString($data[1]);
            $button_css="";//Needs reseting to get button CSS produced!
            PageTitle();
        }
        
        /**
         * @depends testSetupWorked
         * $page->buildList();
         */
	function testBuildList() {
            if ($this->defaults==1) {//No check as not executed...
                $this->assertTrue(true);
                return;
            }            
            $page=Safe_DataObject_factory($this->getDataObjectName());
            $defs=dbRoot::fromCache("Defaults",1);
            $page->ExhibitionID=$defs->ShowID;
            $this->assertEquals($this->getExpectedList(),$page->buildList());
        }
                        
        /**
         * @depends testSetupWorked
         * @depends testBuildList
         * 
         * check old method of direct printing and new string method return the 
         * same data. Will become obsolete when we refactor :
         */
        function testPrintList() {
            if ($this->defaults==1) {//No check as not executed...
                $this->assertTrue(true);
                return;
            }
            $page=Safe_DataObject_factory($this->getDataObjectName());
            $defs=dbRoot::fromCache("Defaults",1);
            $page->ExhibitionID=$defs->ShowID;
            $this->expectOutputString($page->buildList());
            $page->printList();
        }
        
        /**
         * @depends testSetupWorked
         * tests $page->buildForm();
         */
        function testBuildForm() {
            if ($this->defaults==1) {//No check as not executed...
                $this->assertTrue(true);
                return;
            }
            $page=Safe_DataObject_factory($this->getDataObjectName());
            $defs=dbRoot::fromCache("Defaults",1);
            $page->ExhibitionID=$defs->ShowID;
            $this->assertEquals($this->getExpectedForm(),$page->buildForm());            
        }
                        
        /**
         * @depends testSetupWorked
         * @depends testBuildForm
         * 
         * check old method of direct printing and new string method return the 
         * same data. Will become obsolete when we refactor :
         */
        function testPrintForm() {
            if ($this->defaults==1) {//No check as not executed...
                $this->assertTrue(true);
                return;
            }
            $page=Safe_DataObject_factory($this->getDataObjectName());
            $defs=dbRoot::fromCache("Defaults",1);
            $page->ExhibitionID=$defs->ShowID;
            $this->expectOutputString($page->buildForm());
            $page->printForm();
        }
        
        /**
         * @depends testSetupWorked
         * tests $page->buildFooter();
         */
        function testBuildFooter() {
            if ($this->defaults==1) {//No check as not executed...
                $this->assertTrue(true);
                return;
            }
            $page=Safe_DataObject_factory($this->getDataObjectName());
            $defs=dbRoot::fromCache("Defaults",1);
            $page->ExhibitionID=$defs->ShowID;
            $this->assertEquals($this->getExpectedFooter(),$page->buildFooter());            
        }
        
        /**
         * @depends testSetupWorked
         * @depends testBuildFooter
         * 
         * check old method of direct printing and new string method return the 
         * same data. Will become obsolete when we refactor :
         */
        function testFooter() {
            if ($this->defaults==1) {//No check as not executed...
                $this->assertTrue(true);
                return;
            }
            $page=Safe_DataObject_factory($this->getDataObjectName());
            $defs=dbRoot::fromCache("Defaults",1);
            $page->ExhibitionID=$defs->ShowID;
            $this->expectOutputString($page->buildFooter());
            $page->Footer();
        }

        /**
         * @depends testSetupWorked
         * @depends testBuildPageTitle
         * @depends testBuildFooter
         */
        function testBuildPage() {
            $this->assertEquals(
                    $this->getExpectedPage(),
                    dbRoot::buildPage($this->getDataObjectName())
                );
        }
        
        /**
         * @depends testSetupWorked
         * @depends testBuildPage
         * @depends testShowPageTitle
         * @depends testPrintList
         * @depends testPrintForm
         * @depends testFooter
         * 
         * check old method of direct printing and new string method return the 
         * same data. Will become obsolete when we refactor :
         */
	function testShowPage() {
            global $button_css;
            $this->expectOutputString(dbRoot::buildPage($this->getDataObjectName()));
            $button_css="";//Needs reseting to get button CSS produced!
            dbRoot::showPage($this->getDataObjectName());
	}

}
?>