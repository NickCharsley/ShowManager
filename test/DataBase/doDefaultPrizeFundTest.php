<?php

include_once('ons_common.php');

class doDefaultPrizeFundTest extends DataBaseViews {

    public $tables = array("DefaultPrizeFund");

    function DataRowProvider() {
        return array(
            array(1, array("Name" => "First", "Prize" => "1.00", "Points" => 3)),
            array(2, array("Name" => "Second", "Prize" => "0.80", "Points" => 2)),
            array(3, array("Name" => "Third", "Prize" => "0.50", "Points" => 1)),
        );
    }

    function FileName() {
        return "Tables/DefaultPrizeFund";
    }

}

?>