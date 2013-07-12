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
global $importMap;

$dbTables=array();
$importMap=array();


class dbRoot extends DB_DataObject {
	protected $_dirty;
	public $isView=false;

	public $fb_useMutators=true;

	static function clearCache($table){
            global $dbTables;
            if (isset($dbTables[$table]))
                    unset($dbTables[$table]);
	}
        
        static function addToCache($dataobject){
            global $dbTables;
            $rowID=$dataobject->ID;
            $table=strtolower($dataobject->__table);
            if ($rowID<=0) return;
            if (!(isset($dbTables[$table]) and isset($dbTables[$table][$rowID]))){
                    //error_log("{$table}[{$rowID}] not in Cache");
                    $dbTables[$table][$rowID]=$dataobject;
            }
            //else error_log("{$table}[{$rowID}] in Cache");
            return $dbTables[$table][$rowID];            
        }

        static function getImportMap($table,$key){
            global $importMap;
            if ($key<=0) return NULL;
            $table=strtolower($table);
            return $importMap[$table][$key];
        }
        
        static function importMap($table,$key,$id=-1){
            global $importMap;
            if ($key<=0) return 0;
            $table=strtolower($table);
            if ($id>0){
                $importMap[$table][$key]['map']=$id;
            }            
            return $importMap[$table][$key]['map'];
        }
        
	static function fromCache($table,$rowID){
            global $dbTables;
            if ($rowID<=0) return;
            $table=strtolower($table);
            if (!(isset($dbTables[$table]) and isset($dbTables[$table][$rowID]))){
                    //error_log("{$table}[{$rowID}] not in Cache");
                    $dbTables[$table][$rowID]=safe_dataobject_factory($table);
                    $dbTables[$table][$rowID]->get($rowID);
            }
            //else error_log("{$table}[{$rowID}] in Cache");
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
        
	function updateDefaults(){
		global $config;

		$defs=dbRoot::fromCache("Defaults",1);
		$class=substr(get_class($this),strlen($config['DB_DataObject']['class_prefix']));
		$doForm=safe_dataobject_factory($class);

		if (isset($_GET['action']) and isset($_GET['id'])){
			$doForm->get($_GET['id']);
			if ($_GET['action']=='default'){
				$defs->ShowID=$doForm->ID;
				$defs->update();
				$defs->getLinks();
			}
		}
	}

        static function CalculatePrizeFund($reset=false){
            global $db;
            //This does several things
            //1 Delete any Prizes that nolonger exist
            $sql="delete from exhibitionclassprize where prizeid=0";
            PEARError($db->query($sql));
            //2 Add Prize combinations that are missing
            $sql="insert into exhibitionclassprize (ExhibitionClassID,prizeID,prize,points) ".
                "select ec.ID ExhibitionClassID, p.ID prizeID,prize,points ".
                "from exhibitionclass ec,prize p ".
                "where not exists ( ".
                "    select 1 ".
                "    from exhibitionclassprize ecp ".
                "    where ec.ID=ecp.ExhibitionClassID ".
                "    and p.ID=ecp.prizeID ".
                ");";
            //krumo($sql);
            PEARError($db->query($sql));
            //3 Refreshes Prizes with thier values and points
            if ($reset){
                $sql="update `exhibitionclassprize` " .
                    "set prize=(select prize from prize where prize.id=prizeid)," .
                    "points=(select points from prize where prize.id=prizeid)" .
                    "where `exhibitionclassprize`.`ExhibitionClassID` in (" .
                    "SELECT exhibitionclass.ID " .
                    "FROM exhibitionclass " .
                    "INNER JOIN defaults " .
                    "ON (exhibitionclass.ExhibitionID = defaults.ShowID))";
		PEARError($db->query($sql));
            }            
        }
        
	function printForm(){
		$doForm=clone($this);

		if (isset($_GET['action']) and isset($_GET['id'])){
			$doForm->get($_GET['id']);
			if ($_GET['action']<>'edit')
				$doForm=clone($this);
		}

		$fbForm =&DB_DataObject_FormBuilder::create($doForm);
		$form =& $fbForm->getForm();
		if ($form->validate()) {
			//DB_DataObject::debugLevel(5);
			$form->process(array(&$fbForm,'processForm'), false);
			$form->freeze();
		}

		print AddButton("New","?action=new");
		print "<br/><br/><hr/>";
		$form->display();

		print "<hr/>";
	}

	function printList(){}
        function footer(){}

	static function showPage($type){
		PEARError($page=safe_DataObject_factory($type));

		$defs=dbRoot::fromCache("Defaults",1);
		$page->ExhibitionID=$defs->ShowID;

		if (PageTitle()){
			$page->UpdateDefaults();
			$page->PrintList();
			$page->PrintForm();
                        $page->Footer();
		}
	}

	function Fields2Backup(){
		return array_keys($this->table());
	}

	function BackupTable(){
		if ($this->isView) return "\t<!-- No Backup as View (".$this->__table.") -->\n";

		$xml ="\t<table name='".$this->__table."'>\n";
		//Add Fields
		$fields=$this->Fields2Backup();
		$xml.="\t\t<column>".join("</column>\n\t\t<column>",$fields)."</column>\n";

		$do=safe_dataobject_factory($this->__table);
		$do->orderBy("ID");
		$do->find();
		while ($do->fetch()){
			$xml.="\t\t<row>";
			foreach($fields as $field){
				if (isset($do->$field))
					$xml.="<value>".htmlentities($do->$field,ENT_COMPAT | ENT_XML1)."</value>";
				else
					$xml.="<null/>";
			}
			$xml.="</row>\n";
		}

		$xml.="\t</table>\n";
		return $xml;
	}

	static function getTables(){
		global $config;

		$db_name=split("/",$config['DB_DataObject']['database']);
		$name=$db_name[count($db_name)-1];

		$tables=array_keys(parse_ini_file(buildpath($config['DB_DataObject']['schema_location'],"$name.ini"),true));
		for ($index=count($tables)-1;$index>=0;$index--){
			if (strpos($tables[$index],"__keys")) unset($tables[$index]);
		}
		return array_values($tables);
	}

	static function BackupDB(){
		$xml="<dataset>\n";
		foreach (dbRoot::getTables() as $table){
			$do=safe_dataobject_factory($table);
			$xml.=$do->BackupTable();
		}
		$xml.="</dataset>\n";
		return $xml;
	}

        function gatherExportDataObjects(&$ret,$Exhibitors=false){
            //Just add Me
            if (isset($ret[$this->__table]))
                if(isset($ret[$this->__table][$this->ID])) return false;
            $ret[$this->__table][$this->ID]=$this->ID;
            return true;
        }
        
        function ImportObject($object,$key,$Exhibitors=false){
            $values=split("\n",$object);
            krumo($values);
        }
  
        static function getObjectValue($name,$object){
            if (!(strpos($object,"<value name='$name'")===false)){
                $id=substr($object,strpos($object,"<value name='$name'"));
                $id=substr($id,strpos($id,">")+1);
                $id=substr($id,0,strpos($id,"<"));
                return $id;
            }
        }
        
        static function Import($filename,$Exhibitors=false){
            //Clear $importMap
            global $importMap;
            $importMap=array();
            //Load File
            $xml=file_get_contents($filename);
            $a_xml=split('<object',$xml);
            unset($a_xml[0]);//pre first Object so rubish;
            //krumo($a_xml);
            
            foreach ($a_xml as $object){
                $object="<object$object";
                //Get Object Name
                if (!(strpos($object,"<object name=")===false)){
                    $name=substr($object,strpos($object,"'")+1);
                    $name=substr($name,0,strpos($name,"'"));
                    
                    //Get Object ID
                    if (!(strpos($object,"<value name='ID'")===false)){
                        $id=  dbRoot::getObjectValue('ID',$object);
                        //Add to $importMap
                        $importMap[$name][$id]['map']=0;
                        $importMap[$name][$id]['data']=$object;
                        $importMap[$name][$id]['do']=safe_dataobject_factory($name);
                        $importMap[$name][$id]['imported']=false;
                    }
                }
            }
            foreach ($importMap as $name=>$objects){
                foreach ($objects as $id=>$object){
                    if ($object['map']==0){
                        //$importMap[$name][$id]['imported']=true;
                        $object['do']->ImportObject($object['data'],$id,$Exhibitors);
                    }
                }
            }
            krumo($importMap);
            return true;
        }
        
        function ExportInstance(){
            if ($this->isView) return "\t<!-- No Export as View (".$this->__table.") -->\n";

            $xml ="\t<object name='".$this->__table."'>\n";
            $fields=$this->Fields2Backup();

            foreach($fields as $field){
                if (isset($this->$field))
                    $xml.="\t\t<value name='$field'>".htmlentities($this->$field,ENT_COMPAT | ENT_XML1)."</value>\n";
                else
                    $xml.="<null/>";
            }

            $xml.="\t</object>\n";
            return $xml;
	}
}

//************************************************
debug_error_log("Exit ".__FILE__);
?>