<?php
/**
 * Table Definition for exhibitiontrophyclass
 */
require_once 'DB/DataObject.php';

class doExhibitiontrophyclass extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitiontrophyclass';    // table name
    public $id;                              // int(4)  primary_key not_null
    public $TrophyID;                        // int(4)  
    public $ExhibitionClassID;               // int(4)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doExhibitiontrophyclass',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
