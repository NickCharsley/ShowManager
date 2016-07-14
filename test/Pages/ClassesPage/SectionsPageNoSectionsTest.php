<?php
include_once('ons_common.php');

class SectionsPageNoSectionsTest extends SectionsPage 
{    
    function setUp(){
        $this->defaults=5;
        parent::setUp();
        truncateTable("ExhibitionSection");
        $defs=dbRoot::fromCache("Defaults",1);
        $defs->ShowID=9;
        $defs->update();
        dbRoot::clearCache("Defaults");                
    }
}
?>