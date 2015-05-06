<?php

include_once('ons_common.php');

class doClassTest extends DataBaseTables {

    public $tables = array("Class");

    function DataRowProvider() {
        return array(
            array(1, array("Name" => "Sweet Peas", "Description" => "3 x one cultivars")),
            array(2, array("Name" => "Sweet Peas", "Description" => "6 x two or more cultivars")),
            array(3, array("Name" => "Pansies", "Description" => "4 blooms")),
            array(4, array("Name" => "Pinks", "Description" => "4 blooms")),
            array(5, array("Name" => "Small Flowers", "Description" => "6 blooms (not to sxceed size of £2 coin)")),
            array(6, array("Name" => "Clematis", "Description" => "one bloom")),
            array(7, array("Name" => "Clematis", "Description" => "3 blooms")),
            array(8, array("Name" => "Roses", "Description" => "3 blooms H.T. of one cultivar")),
            array(9, array("Name" => "Roses", "Description" => "3 blooms H.T. of two or more cultivars")),
            array(10, array("Name" => "Roses", "Description" => "3 stems floribunda type")),
        );
    }

    function getBackup($data = false) {
        return "\t<table name='Class'>\n" .
                "\t\t<column>ID</column>\n" .
                "\t\t<column>Name</column>\n" .
                "\t\t<column>Description</column>\n" .
                ($data ? "\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n" .
                        "\t\t<row><value>2</value><value>Sweet Peas</value><value>6 x two or more cultivars</value></row>\n" .
                        "\t\t<row><value>3</value><value>Pansies</value><value>4 blooms</value></row>\n" .
                        "\t\t<row><value>4</value><value>Pinks</value><value>4 blooms</value></row>\n" .
                        "\t\t<row><value>5</value><value>Small Flowers</value><value>6 blooms (not to sxceed size of £2 coin)</value></row>\n" .
                        "\t\t<row><value>6</value><value>Clematis</value><value>one bloom</value></row>\n" .
                        "\t\t<row><value>7</value><value>Clematis</value><value>3 blooms</value></row>\n" .
                        "\t\t<row><value>8</value><value>Roses</value><value>3 blooms H.T. of one cultivar</value></row>\n" .
                        "\t\t<row><value>9</value><value>Roses</value><value>3 blooms H.T. of two or more cultivars</value></row>\n" .
                        "\t\t<row><value>10</value><value>Roses</value><value>3 stems floribunda type</value></row>\n" : "") .
                "\t</table>\n";
    }

    function FileName() {
        return "Tables/Class";
    }

}

?>