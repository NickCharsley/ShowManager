<?php
/**
 * Table Definition for defaultexhibitiontrophyclass
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitiontrophyclass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitiontrophyclass';    // table name
    public $id;                              // int(4)   not_null
    public $trophyid;                        // int(4)  
    public $exhibitionclassid;               // int(4)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    public $isView=true;
    
    function keys(){
    	return array("ID");
    }
}
