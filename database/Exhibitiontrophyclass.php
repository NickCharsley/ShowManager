<?php
/**
 * Table Definition for exhibitiontrophyclass
 */
require_once 'DB/DataObject.php';

class doExhibitiontrophyclass extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitiontrophyclass';    // table name
    public $ID;                              // int(4)  primary_key not_null
    public $TrophyID;                        // int(4)  
    public $ExhibitionClassID;               // int(4)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    function gatherExportDataObjects(&$ret,$Exhibitors=false){
        if (parent::gatherExportDataObjects($ret,$Exhibitors)){
            //Now Add Children
            //ExhibitionClass
            $doES=dbRoot::fromCache("ExhibitionClass",$this->ExhibitionClassID);
            $doES->gatherExportDataObjects($ret,$Exhibitors);
            //TrophyID
            $doT=dbRoot::fromCache("Trophy",$this->TrophyID);
            $doT->gatherExportDataObjects($ret,$Exhibitors);
        }
    }

        function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //Exhibition Class Trophy Found by Trophy and Exhibition Class ID
            $TrophyID=dbRoot::getObjectValue("TrophyID", $object);
            if (dbRoot::importMap("Trophy",$TrophyID)==0){
                $map=dbRoot::getImportMap("Trophy", $TrophyID);                    
                $map['do']->ImportObject($map['data'],$TrophyID,$Exhibitors);
            }                                        
            
            $ExhibitionClassID=dbRoot::getObjectValue("ExhibitionClassID", $object);
            if (dbRoot::importMap("ExhibitionClass",$ExhibitionClassID)==0){
                $map=dbRoot::getImportMap("ExhibitionClass", $ExhibitionClassID);                    
                $map['do']->ImportObject($map['data'],$ExhibitionClassID,$Exhibitors);
            }                                        
            $this->ExhibitionClassID=dbRoot::importMap("ExhibitionClass",$ExhibitionClassID);                
            if (!$this->find(true)){
                $this->insert();
                $this->find(true);
            }
            dbRoot::addToCache($this);
            dbRoot::importMap($this->__table,$key,$this->ID);
        }
    }

}
