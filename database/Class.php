<?php
/**
 * Table Definition for class
 */
require_once 'dbRoot.php';

class doClass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'class';               // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $Description;                     // varchar(255)  unique_key

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_formHeaderText="Section";
    public $fb_linkDisplayFields=array("Name","Description");
    ###End Formbuilder Code
    
    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //if (dbRoot::importMap($this->__table,$key)==0){
                $this->Name=dbRoot::getObjectValue("Name", $object);
                $this->Description=dbRoot::getObjectValue("Description", $object);
                if (!$this->find(true)){
                    //Need to save this as New
                    $this->insert();
                    $this->find(true);
                }
                dbRoot::addToCache($this);
                dbRoot::importMap($this->__table,$key,$this->ID);
            //}
        }
    }    
}
?>