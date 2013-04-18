<?php
/**
 * Table Definition for exhibitionclassprize
 */
require_once 'DB/DataObject.php';

class doExhibitionclassprize extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    protected $__table = 'exhibitionclassprize';    // table name
    protected $ID;                              // int(4)  primary_key not_null
    protected $ExhibitionClassID;               // int(4)   not_null
    protected $PrizeID;                         // int(4)   not_null
    protected $Prize;                           // decimal(10,2)  
    protected $Points;                          // int(4)  
    protected $ExhibitionExhibitorID;           // int(4)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_crossLinkExtraFields = array("ExhibitionExhibitorID");
    public $fb_linkDisplayFields=array("ExhibitionClassID","PrizeID");
    public $fb_linkDisplayLevel=2;
    ###End Formbuilder Code

}
