<?php
/**
 * Table Definition for exhibitor
 */
require_once 'DB/DataObject.php';

class doExhibitor extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    protected $__table = 'exhibitor';           // table name
    protected $ID;                              // int(4)  primary_key not_null
    protected $Surname;                         // varchar(255)  unique_key not_null
    protected $Member;                          // tinyint(1)   not_null
    protected $Title;                           // varchar(20)  unique_key
    protected $Initials;                        // varchar(20)  unique_key

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    
    //this will make this DataObject behave as if it had an extra string field
    private $Name;
    function table() {
        return array_merge(parent::table(), array('Name' => DB_DATAOBJECT_STR));
    }
	//stop the virtual field from being in the INSERT
    function insert() {
        if (isset($this->Name)) {
            unset($this->Name);
        }
        parent::insert();
    }

    //stop the virtual field from being in the UPDATE
    function update($do = false) {
        if (isset($this->Name)) {
            unset($this->Name);
        }
        if (is_object($do) && isset($do->Name)) {
            unset($do->Name);
        }
        parent::update($do);
    }
    function find($doFind=false){
    	$this->orderBy();
    	$this->orderBy("Surname, Initials, Title");
    	$ret=parent::find($doFind);
    	//if ($doFind) $this->fetch();
    	return $ret;
    }
    function fetch() {
        $ret=parent::fetch();
        $this->Name=$this->Title." ".$this->Initials." ".$this->Surname;
        return $ret;
    }
    ###Formbuilder Code
	public $fb_formHeaderText="Competitor";
	public $fb_linkDisplayLevel=2;
	public $fb_linkDisplayFields=array("Name");
	###End Formbuilder Code
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");
	$prize=DB_DataObject::factory("exhibitionexhibitor");
	$prize->ShowID=$defs->ShowID;
	$fg =&DB_DataObject_FormBuilder::create($prize);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}
	$form->display();
}
?>