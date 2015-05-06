<?php

include_once('ons_common.php');

class doExhibitionClassTest extends DataBaseTables {

    public $tables = array("ExhibitionClass");

    function DataRowProvider() {
        return array(
            array(1, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 1, "ClassID" => 1)),
            array(2, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 2, "ClassID" => 2)),
            array(3, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 3, "ClassID" => 3)),
            array(4, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 4, "ClassID" => 4)),
            array(5, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 5, "ClassID" => 5)),
            array(6, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 6, "ClassID" => 6)),
            array(7, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 7, "ClassID" => 7)),
            array(8, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 8, "ClassID" => 8)),
            array(9, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 9, "ClassID" => 9)),
            array(10, array("ExhibitionID" => 3, "ExhibitionSectionID" => 1, "ClassNumber" => 10, "ClassID" => 10)),
        );
    }

    function getBackup($data = false) {
        return "\t<table name='ExhibitionClass'>\n" .
                "\t\t<column>ID</column>\n" .
                "\t\t<column>ExhibitionID</column>\n" .
                "\t\t<column>ExhibitionSectionID</column>\n" .
                "\t\t<column>ClassNumber</column>\n" .
                "\t\t<column>ClassID</column>\n" .
                ($data ?
                        //"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
                        "\t\t<row><value>1</value><value>3</value><value>1</value><value>1</value><value>1</value></row>\n" .
                        "\t\t<row><value>2</value><value>3</value><value>1</value><value>2</value><value>2</value></row>\n" .
                        "\t\t<row><value>3</value><value>3</value><value>1</value><value>3</value><value>3</value></row>\n" .
                        "\t\t<row><value>4</value><value>3</value><value>1</value><value>4</value><value>4</value></row>\n" .
                        "\t\t<row><value>5</value><value>3</value><value>1</value><value>5</value><value>5</value></row>\n" .
                        "\t\t<row><value>6</value><value>3</value><value>1</value><value>6</value><value>6</value></row>\n" .
                        "\t\t<row><value>7</value><value>3</value><value>1</value><value>7</value><value>7</value></row>\n" .
                        "\t\t<row><value>8</value><value>3</value><value>1</value><value>8</value><value>8</value></row>\n" .
                        "\t\t<row><value>9</value><value>3</value><value>1</value><value>9</value><value>9</value></row>\n" .
                        "\t\t<row><value>10</value><value>3</value><value>1</value><value>10</value><value>10</value></row>\n" : "") .
                "\t</table>\n";
    }

    function FileName() {
        return "Tables/ExhibitionClass";
    }

}

?>