<?php
/**
 * Table Definition for defaultexhibitionclass
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionclass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    protected $__table = 'defaultexhibitionclass';    // table name
    protected $ID;                              // int(4)   not_null
    protected $ExhibitionID;                    // int(4)   not_null
    protected $ExhibitionSectionID;             // int(4)   not_null
    protected $ClassNumber;                     // int(4)   not_null
    protected $ClassID;                         // int(4)   not_null

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
