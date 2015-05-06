<?php

include_once('ons_common.php');

class doDefaultExhibitionSectionTest extends DataBaseViews {

    public $tables = array("DefaultExhibitionSection", "Exhibition", "Section");

    function DataRowProvider() {
        return array(
            array(1, array("ExhibitionID" => 3, "SectionNumber" => "1", "SectionID" => 1)),
            array(2, array("ExhibitionID" => 3, "SectionNumber" => "2", "SectionID" => 2)),
            array(3, array("ExhibitionID" => 3, "SectionNumber" => "3", "SectionID" => 3)),
            array(4, array("ExhibitionID" => 3, "SectionNumber" => "4", "SectionID" => 4)),
            array(5, array("ExhibitionID" => 3, "SectionNumber" => "5", "SectionID" => 6)),
            array(6, array("ExhibitionID" => 3, "SectionNumber" => "6", "SectionID" => 5)),
            array(7, array("ExhibitionID" => 3, "SectionNumber" => "7", "SectionID" => 7)),
            array(8, array("ExhibitionID" => 3, "SectionNumber" => "8", "SectionID" => 8)),
            array(9, array("ExhibitionID" => 3, "SectionNumber" => "9", "SectionID" => 9)),
            array(10, array("ExhibitionID" => 3, "SectionNumber" => "10", "SectionID" => 10)),
            array(11, array("ExhibitionID" => 2, "SectionNumber" => "1", "SectionID" => 11)),
        );
    }

    function FileName() {
        return "Tables/DefaultExhibitionSection";
    }

}

?>