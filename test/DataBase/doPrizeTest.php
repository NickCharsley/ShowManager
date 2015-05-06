<?php

include_once('ons_common.php');

class doPrizeTest extends DataBaseTables {

    public $tables = array("Prize");

    function DataRowProvider() {
        return array(
            array(1, array("Name" => "First", "Prize" => "1.00", "Points" => 3)),
            array(2, array("Name" => "Second", "Prize" => "0.80", "Points" => 2)),
            array(3, array("Name" => "Third", "Prize" => "0.50", "Points" => 1)),
        );
    }

    function getBackup($data = false) {
        return "\t<table name='Prize'>\n" .
                "\t\t<column>ID</column>\n" .
                "\t\t<column>Name</column>\n" .
                "\t\t<column>Prize</column>\n" .
                "\t\t<column>Points</column>\n" .
                ($data ?
                        //"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
                        "\t\t<row><value>1</value><value>First</value><value>1.00</value><value>3</value></row>\n" .
                        "\t\t<row><value>2</value><value>Second</value><value>0.80</value><value>2</value></row>\n" .
                        "\t\t<row><value>3</value><value>Third</value><value>0.50</value><value>1</value></row>\n" : "") .
                "\t</table>\n";
    }

    function FileName() {
        return "Tables/Prize";
    }

}

?>