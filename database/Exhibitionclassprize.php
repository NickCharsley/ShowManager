<?php
/**
 * Table Definition for exhibitionclassprize
 */
require_once 'DB/DataObject.php';

class doExhibitionclassprize extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitionclassprize';    // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionClassID;               // int(4)   not_null
    public $PrizeID;                         // int(4)   not_null
    public $Prize;                           // decimal(10,2)  
    public $Points;                          // int(4)  
    public $ExhibitionExhibitorID;           // int(4)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_crossLinkExtraFields = array("ExhibitionExhibitorID");
    public $fb_linkDisplayFields=array("ExhibitionClassID","PrizeID");
    public $fb_linkDisplayLevel=2;
    ###End Formbuilder Code

    private function getChildren($child,&$ret,$Exhibitors=false){
        $doC=safe_dataobject_factory($child);
        $doC->ExhibitionClassPrizeID=$this->ID;
        $doC->find();
        while ($doC->fetch()){
            $doC->gatherExportDataObjects($ret,$Exhibitors);
        }        
    }    
    
    function gatherExportDataObjects(&$ret,$Exhibitors=false){        
        if (parent::gatherExportDataObjects($ret,$Exhibitors)){
            //Now Add Children
            //Sponsorship
            $this->getChildren("Sponsorship", $ret);
            //ExhibitionClass
            $doEC=dbRoot::fromCache("ExhibitionClass",$this->ExhibitionClassID);
            $doEC->gatherExportDataObjects($ret,$Exhibitors);
            //Prize
            $doP=dbRoot::fromCache("Prize",$this->PrizeID);
            $doP->gatherExportDataObjects($ret,$Exhibitors);
            //ExhibitionExhibitor
            if ($Exhibitors){
                if (isset($this->ExhibitionExhibitorID)){
                    $doEE=dbRoot::fromCache("ExhibitionExhibitor",$this->ExhibitionExhibitorID);
                    $doEE->gatherExportDataObjects($ret,$Exhibitors);               
                }
            }
        }
    }
    
    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //Exhibition Class Prize Found by Prize and Exhibition Class ID
            $PrizeID=dbRoot::getObjectValue("PrizeID", $object);
            if (dbRoot::importMap("Prize",$PrizeID)==0){
                $map=dbRoot::getImportMap("Prize", $PrizeID);                    
                $map['do']->ImportObject($map['data'],$PrizeID,$Exhibitors);
            }                                        
            $this->PrizeID=dbRoot::importMap("Prize",$PrizeID);

            $ExhibitionClassID=dbRoot::getObjectValue("ExhibitionClassID", $object);
            if (dbRoot::importMap("ExhibitionClass",$ExhibitionClassID)==0){
                $map=dbRoot::getImportMap("ExhibitionClass", $ExhibitionClassID);                    
                $map['do']->ImportObject($map['data'],$ExhibitionClassID,$Exhibitors);
            }                                        
            $this->ExhibitionClassID=dbRoot::importMap("ExhibitionClass",$ExhibitionClassID);                
            if ($this->find(true)){
                //Need to check data
                diehere();
            } else {
                //Now Need to Get Data....
                
                $this->Points=dbRoot::getObjectValue("Points", $object);
                $this->Prize=dbRoot::getObjectValue("Prize", $object);
                
                if ($Exhibitors){
                    diehere();
                }                
                $this->insert();
                $this->find(true);
            }
            dbRoot::addToCache($this);
            dbRoot::importMap($this->__table,$key,$this->ID);
        }
    }

}
