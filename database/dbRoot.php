<?php
/*
 * File dbRoot.php
 * Created on 17 Oct 2011 by Nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2011 ONS
 *
 */
 if (!defined("__ONS_COMMON__"))
 	include_once('ons_common.php');
 debug_error_log("Enter ".__FILE__);
//************************************************
//TODO:any generic code for dbRoot.php goes here

define('DB_DATAOBJECT_ERROR_INSERT_KEY_EXISTS'  ,-8  );  // Called Insert with keys that already exist
define('DB_DATAOBJECT_ERROR_INSERT_NOT_DIRTY'   ,-9  );  // Called Insert with no 'new' data
define('DB_DATAOBJECT_ERROR_UPDATE_NOT_DIRTY'   ,-10 );  // Called Update with no 'new' data
define('DB_DATAOBJECT_ERROR_DUPLICATE_ROWUUID'  ,-11 );  // Called Insert with Duplicate RowUUID
define('DB_DATAOBJECT_ERROR'                    ,-100);  // Error in underlying Code
define('DB_DATAOBJECT_ERROR_OVERRIDE_METHOD'    ,-200);  // Called Update with no 'new' data

//To Flag Loaded State Of Links 
define('DB_DATAOBJECT_NOT_LOADED'  ,12345);  // Not Loaded Yet
define('DB_DATAOBJECT_LOADED'      ,12346);  // Loaded
define('DB_DATAOBJECT_ADDED'       ,12347);  // Added
define('DB_DATAOBJECT_DELETED'     ,12348);  // Needs to Be deleted

class DB_DataObject_Exception extends PEAR_Exception {};

global $dbTables;

$dbTables=array();


class dbRoot extends DB_DataObject {
	protected $_dirty;

	public $fb_useMutators=true;
	
	static function fromCache($table,$rowID){
		global $dbTables;
		if (!(isset($dbTables[$table]) and isset($dbTables[$table][$rowID]))){
			$dbTables[$table][$rowID]=safe_dataobject_factory($table);
			$dbTables[$table][$rowID]->get($rowID);
		}
		return $dbTables[$table][$rowID];
	}
	
/** /
	function __set($field,$value){
		if ($this->$field<>$value){
			$this->_dirty=true;
			$this->$field=$value;	
		}		 
	}

	function __get($field){
		return $this->$field;
	}
/**/
	function Save(){
		if (!$this->find(true)){
			$this->insert();
			$this->find(true);
		}
		return $this->ID;
	}
	
}

//************************************************
debug_error_log("Exit ".__FILE__);
?>