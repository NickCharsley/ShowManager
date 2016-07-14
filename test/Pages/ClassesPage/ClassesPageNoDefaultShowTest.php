<?php
include_once('ons_common.php');

class ClassesPageNoDefaultShowTest extends ClassesPage 
{
    function setUp(){
        $this->defaults=2;
        parent::setUp();
        dbRoot::clearCache("Defaults");                
    }
}
?>