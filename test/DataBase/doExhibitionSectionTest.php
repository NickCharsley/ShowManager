<?php

include_once('ons_common.php');

class doExhibitionSectionTest extends DataBaseTables {

    public $tables = array("ExhibitionSection", "Exhibition", "Section");

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

    function getBackup($data = false) {
        return "\t<table name='ExhibitionSection'>\n" .
                "\t\t<column>ID</column>\n" .
                "\t\t<column>ExhibitionID</column>\n" .
                "\t\t<column>SectionNumber</column>\n" .
                "\t\t<column>SectionID</column>\n" .
                ($data ?
                        //"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
                        "\t\t<row><value>1</value><value>3</value><value>1</value><value>1</value></row>\n" .
                        "\t\t<row><value>2</value><value>3</value><value>2</value><value>2</value></row>\n" .
                        "\t\t<row><value>3</value><value>3</value><value>3</value><value>3</value></row>\n" .
                        "\t\t<row><value>4</value><value>3</value><value>4</value><value>4</value></row>\n" .
                        "\t\t<row><value>5</value><value>3</value><value>5</value><value>6</value></row>\n" .
                        "\t\t<row><value>6</value><value>3</value><value>6</value><value>5</value></row>\n" .
                        "\t\t<row><value>7</value><value>3</value><value>7</value><value>7</value></row>\n" .
                        "\t\t<row><value>8</value><value>3</value><value>8</value><value>8</value></row>\n" .
                        "\t\t<row><value>9</value><value>3</value><value>9</value><value>9</value></row>\n" .
                        "\t\t<row><value>10</value><value>3</value><value>10</value><value>10</value></row>\n" .
                        "\t\t<row><value>11</value><value>2</value><value>1</value><value>11</value></row>\n" : "") .
                "\t</table>\n";
    }

    function FileName() {
        return "Tables/ExhibitionSection";
    }

}

?>