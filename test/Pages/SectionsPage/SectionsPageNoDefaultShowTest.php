<?php
include_once('ons_common.php');

class SectionsPageNoDefaultShowTest extends SectionsPage 
{
    function setUp(){
        $this->defaults=2;
        parent::setUp();
        dbRoot::clearCache("Defaults");                
    }
}
?>