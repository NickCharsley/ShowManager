<?php
/**
 * Table Definition for trophyresults
 */
require_once 'DB/DataObject.php';

class doTrophyresults extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'trophyresults';       // table name
    public $TrophyID;                        // int(4)   not_null
    public $ExhibitorID;                     // int(4)   not_null
    public $Points;                          // decimal(32,0)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doTrophyresults',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
