<?php
/**
 * Table Definition for sponsorship
 */
require_once 'dbRoot.php';

class doSponsorship extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'sponsorship';         // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $ExhibitionClassPrizeID;          // int(4)   not_null
    public $Prize;                           // varchar(50)   not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_formHeaderText="Sponsorship";
    public $fb_fieldLabels=array("ExhibitionClassPrizeID"=>"Class Prize");
    public $fb_linkDisplayLevel=4;
    ###End Formbuilder Code
    
    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //Exhibition Class Found by Class Number and Exhibition ID
            $this->Name=dbRoot::getObjectValue("Name", $object);
            
            $ExhibitionClassPrizeID=dbRoot::getObjectValue("ExhibitionClassPrizeID", $object);
            if (dbRoot::importMap("ExhibitionClassPrize",$ExhibitionClassPrizeID)==0){
                $map=dbRoot::getImportMap("ExhibitionClassPrize", $ExhibitionClassPrizeID);                    
                $map['do']->ImportObject($map['data'],$ExhibitionClassPrizeID,$Exhibitors);
            }                                        
            $this->ExhibitionClassPrizeID=dbRoot::importMap("ExhibitionClassPrize",$ExhibitionClassPrizeID);                

            if ($this->find(true)){
                //Need to check data
                diehere();
            } else {
                //Now Need to Get Data....
                $this->Prize=dbRoot::getObjectValue("Prize", $object);

                $this->insert();
                $this->find(true);
            }
            dbRoot::addToCache($this);
            dbRoot::importMap($this->__table,$key,$this->ID);
        }
    }

    function EditLink(){
    	return AddButton("Edit","?type=sponsorship&action=edit&id=".$this->ID);
    }
    
    function PrintList(){
    	$list=clone($this);
    	$list->find();
        print "<table>\n";
	while ($list->fetch()){
            
            print "<tr>\n";
                print "<td colspan='2'>\n";
                    print $list->Name;
                print "</td>\n";
                print "<td>\n";
                    print $list->Prize;
                print "</td>\n";
                print "<td>\n";
                    print $list->EditLink();
                print "</td>\n";
            print "</tr>\n";
            //now print components....
            $doECP=$list->getLink("ExhibitionClassPrizeID");            
            $doEC=$doECP->getLink("ExhibitionClassID");
            $doC=$doEC->getLink("ClassID");
            $doP=$doECP->getLink("PrizeID");
            
            print "<tr><td>&nbsp</td><td colspan=3>";
            print $doEC->ClassNumber.") ";
            print $doC->Name;
            print " (".$doC->Description."): ";
            print $doP->Name;
            print"</td></tr>\n";
        }
	print "</table>\n";
	print "<hr/>";
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
        dbRoot::showPage("Sponsorship");              
}
?>