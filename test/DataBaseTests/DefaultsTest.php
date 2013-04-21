<?php
include_once('ons_common.php');

class DefaultsTest extends DataBaseTables
{
	public $tables=array("Defaults","Exhibition");
	
	function DataRowProvider(){
		return array(
			array(1,array("ShowName"=>"BHS","ShowID"=>1)),
		);
	}

	function FileName(){
		return "Tables/Defaults";
	}

	/**
	 *
	 */
	function testTableCreated(){
		parent::testTableCreated();
	}
	
	/**
	 * @depends testTableCreated
	 * @dataProvider DataRowProvider
	 */	 
	function testSingleSave($row,$data){	
		parent::testSingleSave($row,$data);
	}
	
	/**
	 * @outputBuffering enabled
	 * @depends testSingleSave
	 * @dataProvider DataRowProvider
	 */
	function testLinks($row,$data){
		$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		foreach($data as $field=>$value){
			$do->$field=$value;
		}
		$do->Save();
		$do->getLinks();
				
		$this->assertNotNull($do->_ShowID);
		
	}
}
?>