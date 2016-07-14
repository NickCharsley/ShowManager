<?php
include_once('ons_common.php');

class SectionsPageNoDefaultsTest extends SectionsPage 
{    
    function setUp(){
        $this->defaults=1;
        parent::setUp();
        truncateTable("Defaults");
        dbRoot::clearCache("Defaults");                
    }
}
?>