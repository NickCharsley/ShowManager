<?php
/**
 * Table Definition for defaultexhibitionsection
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionsection extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitionsection';    // table name
    public $ID;                              // int(4)   not_null
    public $SectionNumber;                   // varchar(20)   not_null
    public $Name;                            // varchar(255)   not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    public $isView=true;
    
    function keys(){
    	return array("ID");
    }
    ###Formbuilder Code
	public $fb_formHeaderText="Section";
	public $fb_linkDisplayFields=array("SectionNumber","Name");
	###End Formbuilder Code
}
