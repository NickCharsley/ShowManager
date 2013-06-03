<?php

include_once('ons_common.php');

abstract class DataBaseViews extends ONS_Tests_DatabaseTestCase
{
/**/
	private $tableName;		

	abstract public function DataRowProvider();
	function DataRowsProvider(){
		return array(array($this->DataRowProvider()));
	}
        
        protected function sync($table){
            //Because we should be in Sync due to Migrations!
            truncateTable($table);
        }

	function getBackup($data=false){
		return "\t<!-- No Backup as View (".str_replace("Tables/", "", $this->FileName()).") -->\n";
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
	 */
	function testBackupTableWithoutData(){
		$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		$this->assertEquals(strtolower($this->getBackup(false)),strtolower($do->backupTable()));
	}
	
	/**
	 * @depends testTableCreated
	 */
	function testBackupTableWithData(){
		$do=Safe_DataObject_factory(str_replace("Tables/", "", $this->FileName()));
		$this->assertEquals(strtolower($this->getBackup(true)),strtolower($do->backupTable()));
	}
	

}

?>