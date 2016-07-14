<?php
/**
 * Table Definition for defaultprizefund
 */
require_once 'DB/DataObject.php';

class doDefaultprizefund extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaultprizefund';    // table name
    public $ID;                              // int(4)   not_null
    public $Prize;                           // decimal(32,2)  
    public $Points;                          // decimal(32,0)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    public $isView=true;
    
    function keys(){
    	return array("ID");
    }
}
