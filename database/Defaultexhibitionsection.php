<?php
/**
 * Table Definition for defaultexhibitionsection
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionsection extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitionsection';    // table name
    public $ID;                              // int(4)   not_null
    public $SectionNumber;                   // int(4)   not_null
    public $Name;                            // varchar(255)   not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doDefaultexhibitionsection',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    function keys(){
    	return array("ID");
    }
    ###Formbuilder Code
	public $fb_formHeaderText="Section";
	public $fb_linkDisplayFields=array("SectionNumber","Name");
	###End Formbuilder Code
}
