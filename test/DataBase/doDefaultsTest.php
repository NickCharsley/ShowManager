<?php

include_once('ons_common.php');

class doDefaultsTest extends DataBaseTables {

    public $tables = array("Defaults", "Exhibition");

    function DataRowProvider() {
        return array(
            array(1, array("ShowName" => "BHS", "ShowID" => 1)),
        );
    }

    function getBackup($data = false) {
        return "\t<table name='Defaults'>\n" .
                "\t\t<column>ID</column>\n" .
                "\t\t<column>ShowName</column>\n" .
                "\t\t<column>ShowID</column>\n" .
                ($data ? "\t\t<row><value>1</value><value>BHS</value><value>1</value></row>\n" : "") .
                "\t</table>\n";
    }

    function FileName() {
        return "Tables/Defaults";
    }

    /**
     *
     */
    function testTableCreated() {
        parent::testTableCreated();
    }

    /**
     * @depends testTableCreated
     * @dataProvider DataRowProvider
     */
    function testSingleSave($row, $data) {
        parent::testSingleSave($row, $data);
    }

    /**
     * @outputBuffering enabled
     * @depends testSingleSave
     * @dataProvider DataRowProvider
     */
    function testLinks($row, $data) {
        $do = Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
        foreach ($data as $field => $value) {
            $do->$field = $value;
        }
        $do->Save();
        $do->getLinks();

        $this->assertNotNull($do->_ShowID);
    }

}

?>