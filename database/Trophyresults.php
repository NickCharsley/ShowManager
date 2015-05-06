<?php
/**
 * Table Definition for trophyresults
 */
require_once 'dbRoot.php';

class doTrophyresults extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'trophyresults';       // table name
    public $TrophyID;                        // int(4)   not_null
    public $ExhibitorID;                     // int(4)   not_null
    public $Points;                          // decimal(32,0)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    public $isView=true;
    
    function keys(){
    	return array("TrophyID");
    }
}
