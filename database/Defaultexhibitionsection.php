<?php
/**
 * Table Definition for defaultexhibitionsection
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionsection extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    protected $__table = 'defaultexhibitionsection';    // table name
    protected $ID;                              // int(4)   not_null
    protected $SectionNumber;                   // int(4)   not_null
    protected $Name;                            // varchar(255)   not_null

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
