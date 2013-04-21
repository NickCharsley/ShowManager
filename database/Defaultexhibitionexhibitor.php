<?php
/**
 * Table Definition for defaultexhibitionexhibitor
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionexhibitor extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitionexhibitor';    // table name
    public $ID;                              // int(4)   not_null
    public $ExhibitionID;                    // int(4)   not_null default_7
    public $ExhibitorNumber;                 // int(4)   not_null
    public $ExhibitorID;                     // int(4)   not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    function keys(){
    	return array("ID");
    }

    ###Formbuilder Code
	public $fb_formHeaderText="Exhibitor";
	public $fb_linkDisplayFields=array("ExhibitorNumber");
	public $fb_userEditableFields=array("ID","ExhibitionID","ExhibitorNumber","ExhibitorID");
	public $fb_fieldLabels=array("ExhibitionID"=>"Show","ExhibitorID"=>"Competitor","ExhibitorNumber"=>"Number");
	public $fb_linkNewValue=array("ExhibitorID");
	###End Formbuilder Code

}
?>