<?php

include_once('ons_common.php');

abstract class DataBaseTables extends ONS_Tests_DatabaseTestCase
{
/**/
	private $tableName;		

	abstract public function DataRowProvider();
	function DataRowsProvider(){
		return array(array($this->DataRowProvider()));
	}

	/**
	 * 
	 */	
	function testTableCreated(){
		$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		
		$this->assertEquals(strtolower("do".str_replace("Tables/", "", $this->FileName())),strtolower(get_class($do)));		
	}	
	
	//We will take on trust that 'Normal Activity' works so it's more complicated activity we will test
	
	/**
	 * @depends testTableCreated
	 * @dataProvider DataRowProvider
	 */	 
	function testSingleSave($row,$data){
		$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		foreach($data as $field=>$value){
			$do->$field=$value;
		}
		//Always Saves as 1st Row!
		$this->assertEquals(1,$do->Save());		
	}

	/**
	 * @depends testSingleSave
	 * @dataProvider DataRowProvider
	 */
	function testSavedFields($row,$data){
		$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		foreach($data as $field=>$value){
			$do->$field=$value;
		}
		//Always Saves as 1st Row!
		$do->Save();
		
		$doRead=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		$doRead->ID=1;
		$doRead->find(true);
		foreach($data as $field=>$value){
			$this->assertEquals("$field='$value'","$field='".$doRead->$field."'");			
		}			
	}
	
	
	/**
	 * @depends testSavedFields
	 * @dataProvider DataRowProvider
	 */	 
	function testSaveDidNotDuplicate($row,$data){
		$do =Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		$do1=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		foreach($data as $field=>$value){
			$do->$field=$value;
			$do1->$field=$value;
		}
		$do->Save();		
		//Always Saves as 1st Row!
		//And Duplicate so will just not save.
		$this->assertEquals(1,$do1->Save());		
	}

	/**	
	 * @depends testSavedFields
	 * @dataProvider DataRowsProvider
	 */	 
	function testMultipleSave($rows){
		foreach($rows as $row){
			$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
			$data=$row[1];
			foreach($data as $field=>$value){
				$do->$field=$value;
			}
			//Always Saves as nth Row!
			$this->assertEquals($row[0],$do->Save());
		}		
	}

	/**
	 * @depends testTableCreated
	 * @depends testMultipleSave
	 * @dataProvider DataRowsProvider
	 */	 
	function testMultipleSavesDidnotDuplicate($rows){
		foreach($rows as $row){
			$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
			$do1=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
			$data=$row[1];
			foreach($data as $field=>$value){
				$do->$field=$value;
				$do1->$field=$value;
			}
			$do->Save();
			//Always Saves as nth Row!
			//And Duplicate so will just not save.		
			$this->assertEquals($row[0],$do1->Save());
		}		
	}

}

?>