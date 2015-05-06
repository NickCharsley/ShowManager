<?php

include_once('ons_common.php');

class doExhibitionTrophyClassTest extends DataBaseTables {

    public $tables = array("ExhibitionTrophyClass", "ExhibitionClass", "Trophy", "Exhibition");

    function DataRowProvider() {
        return array(
            array(1, array("TrophyID" => 4, "ExhibitionClassID" => 94)),
            array(2, array("TrophyID" => 4, "ExhibitionClassID" => 95)),
            array(3, array("TrophyID" => 4, "ExhibitionClassID" => 96)),
            array(4, array("TrophyID" => 4, "ExhibitionClassID" => 98)),
            array(5, array("TrophyID" => 5, "ExhibitionClassID" => 104)),
            array(6, array("TrophyID" => 5, "ExhibitionClassID" => 105)),
            array(7, array("TrophyID" => 5, "ExhibitionClassID" => 106)),
            array(8, array("TrophyID" => 5, "ExhibitionClassID" => 107)),
            array(9, array("TrophyID" => 6, "ExhibitionClassID" => 146)),
            array(10, array("TrophyID" => 6, "ExhibitionClassID" => 147)),
            array(11, array("TrophyID" => 6, "ExhibitionClassID" => 148)),
            array(12, array("TrophyID" => 6, "ExhibitionClassID" => 149)),
            array(13, array("TrophyID" => 6, "ExhibitionClassID" => 150)),
            array(14, array("TrophyID" => 6, "ExhibitionClassID" => 151)),
            array(15, array("TrophyID" => 6, "ExhibitionClassID" => 152)),
        );
    }

    function getBackup($data = false) {
        return "\t<table name='ExhibitionTrophyClass'>\n" .
                "\t\t<column>ID</column>\n" .
                "\t\t<column>TrophyID</column>\n" .
                "\t\t<column>ExhibitionClassID</column>\n" .
                ($data ?
                        //"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
                        "\t\t<row><value>1</value><value>4</value><value>94</value></row>\n" .
                        "\t\t<row><value>2</value><value>4</value><value>95</value></row>\n" .
                        "\t\t<row><value>3</value><value>4</value><value>96</value></row>\n" .
                        "\t\t<row><value>4</value><value>4</value><value>98</value></row>\n" .
                        "\t\t<row><value>5</value><value>5</value><value>104</value></row>\n" .
                        "\t\t<row><value>6</value><value>5</value><value>105</value></row>\n" .
                        "\t\t<row><value>7</value><value>5</value><value>106</value></row>\n" .
                        "\t\t<row><value>8</value><value>5</value><value>107</value></row>\n" .
                        "\t\t<row><value>9</value><value>6</value><value>146</value></row>\n" .
                        "\t\t<row><value>10</value><value>6</value><value>147</value></row>\n" .
                        "\t\t<row><value>11</value><value>6</value><value>148</value></row>\n" .
                        "\t\t<row><value>12</value><value>6</value><value>149</value></row>\n" .
                        "\t\t<row><value>13</value><value>6</value><value>150</value></row>\n" .
                        "\t\t<row><value>14</value><value>6</value><value>151</value></row>\n" .
                        "\t\t<row><value>15</value><value>6</value><value>152</value></row>\n" : "") .
                "\t</table>\n";
    }

    function FileName() {
        return "Tables/ExhibitionTrophyClass";
    }

}

?>