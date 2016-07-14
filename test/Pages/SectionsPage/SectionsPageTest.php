<?php
include_once('ons_common.php');

class SectionsPageTest extends SectionsPage 
{    
    function setUp(){
        $this->defaults=3;
        parent::setUp();
        $defs=dbRoot::fromCache("Defaults",1);
        $defs->ShowID=9;
        $defs->update();
        dbRoot::clearCache("Defaults");                
    }
}
?>