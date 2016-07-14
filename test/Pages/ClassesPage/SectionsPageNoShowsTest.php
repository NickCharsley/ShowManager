<?php
include_once('ons_common.php');

class SectionsPageNoShowsTest extends SectionsPage 
{    
    function setUp(){
        $this->defaults=4;
        parent::setUp();
        truncateTable("ExhibitionSection");
        truncateTable("Exhibition");
    }
}
?>