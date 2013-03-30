<?php
/**
 * Table Definition for defaultexhibitiontrophyclass
 */
require_once 'DB/DataObject.php';

class doDefaultexhibitiontrophyclass extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultexhibitiontrophyclass';    // table name
    public $id;                              // int(4)   not_null
    public $trophyid;                        // int(4)  
    public $exhibitionclassid;               // int(4)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doDefaultexhibitiontrophyclass',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
