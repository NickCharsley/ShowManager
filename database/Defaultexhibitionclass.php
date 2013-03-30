<?php
/**
 * Table Definition for defaultexhibitionclass
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionclass extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitionclass';    // table name
    public $ID;                              // int(4)   not_null
    public $ExhibitionID;                    // int(4)   not_null
    public $ExhibitionSectionID;             // int(4)   not_null
    public $ClassNumber;                     // int(4)   not_null
    public $ClassID;                         // int(4)   not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doDefaultexhibitionclass',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    	###Formbuilder Code
	public $fb_formHeaderText="Class";
	public $fb_userEditableFields=array("ID","ExhibitionSectionID","ClassNumber","ClassID");
	public $fb_fieldLabels=array("ExhibitionID"=>"Show","ExhibitionSectionID"=>"Section","ClassID"=>"Class");
	public $fb_linkNewValue=array("ClassID");
	public $fb_linkDisplayLevel=2;
	public $fb_linkDisplayFields=array("ExhibitionID","ExhibitionSectionID","ClassID");

	###End Formbuilder Code
    
    
}
