<?php
/**
 * Table Definition for defaultexhibitionclass
 */
require_once 'ons_common.php';

class doDefaultexhibitionclass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitionclass';    // table name
    public $ID;                              // int(4)   not_null
    public $ExhibitionID;                    // int(4)   not_null
    public $ExhibitionSectionID;             // int(4)   not_null
    public $ClassNumber;                     // varchar(10)   not_null
    public $ClassID;                         // int(4)   not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    public $isView=true;
    ###Formbuilder Code
	public $fb_formHeaderText="Class";
	public $fb_userEditableFields=array("ID","ExhibitionSectionID","ClassNumber","ClassID");
	public $fb_fieldLabels=array("ExhibitionID"=>"Show","ExhibitionSectionID"=>"Section","ClassID"=>"Class");
	public $fb_linkNewValue=array("ClassID");
	public $fb_linkDisplayLevel=2;
	public $fb_linkDisplayFields=array("ExhibitionID","ExhibitionSectionID","ClassID");

	###End Formbuilder Code
	function keys(){
		return array("ID");
	}
    
}
