<?php
/**
 * Table Definition for defaultexhibitionclassprize
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitionclassprize extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitionclassprize';    // table name
    public $ID;                              // int(4)   not_null
    public $ExhibitionClassID;               // int(4)   not_null
    public $PrizeID;                         // int(4)   not_null
    public $Prize;                           // decimal(10,2)  
    public $Points;                          // int(4)  
    public $ExhibitionExhibitorID;           // int(4)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doDefaultexhibitionclassprize',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
 	function keys(){
    	return array("ID");
    }
     ###Formbuilder Code
    public $fb_crossLinkExtraFields = array("ExhibitionExhibitorID");
    public $fb_linkDisplayFields=array("ExhibitionClassID","PrizeID");
    public $fb_linkDisplayLevel=2;
    ###End Formbuilder Code
}
?>
