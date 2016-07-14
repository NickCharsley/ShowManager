<?php
/**
 * Table Definition for trophy
 */
require_once 'dbRoot.php';

class doTrophy extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'trophy';              // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionID;                    // int(4)  unique_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $Member;                          // tinyint(1)   not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //Exhibition Class Found by Class Number and Exhibition ID
            $this->Name=dbRoot::getObjectValue("Name", $object);
            $this->ExhibitionID=dbRoot::importMap("Exhibition", dbRoot::getObjectValue("ExhibitionID", $object));
            if (!$this->find(true)){
                //Now Need to Get Data....
                $this->Member=dbRoot::getObjectValue("Member", $object);

                $this->insert();
                $this->find(true);
            }
            dbRoot::addToCache($this);
            dbRoot::importMap($this->__table,$key,$this->ID);
        }
    }
    
    function EditLink(){
    	print "<td>".AddButton('Edit',"?action=edit&id=".$this->ID)."</td>";
    }
    ###Formbuilder Code
	public $fb_crossLinks = array(array('table' => 'Defaultexhibitiontrophyclass',
                                   		'type' => 'select',
			                            'fromField' => 'TrophyID',
			                            'toField' => 'ExhibitionClassID'));
	public $fb_formHeaderText="Trophy";
	public $fb_fieldLabels=array("ExhibitionID"=>"Show","Name"=>"Trophy Name","__crossLink_Defaultexhibitiontrophyclass_TrophyID_ExhibitionClassID"=>"Components");
	public $fb_userEditableFields=array("ID","Name","Member","__crossLink_Defaultexhibitiontrophyclass_TrophyID_ExhibitionClassID");
	public $fb_linkDisplayLevel=2;
	###End Formbuilder Code

        function PrintList(){
            $trophy=clone($this);
            $trophy->find();
            print "<table>\n";
            while ($trophy->fetch()){
                print "<tr>\n";
                    print "<td colspan='3'><em><b>\n";
                        print $trophy->Name;
                    print "</b></em></td>\n";
                    print "<td>\n";
                        print $trophy->EditLink();
                    print "</td>\n";
                    print "<td>\n&nbsp;</td>\n";
                print "</tr>\n";
                $doETC=safe_dataobject_factory("ExhibitionTrophyClass");
                $doETC->TrophyID=$trophy->ID;
                
                $cols=0;
                
                if ($doETC->find()){
                    print "<tr><td>\n&nbsp;</td>\n";
                    while ($doETC->fetch()){
                        if ($cols++>2){
                            $cols=1;
                            print "</tr><tr><td>\n&nbsp;</td>\n";
                        }              
                        $doEC=dbRoot::fromCache("ExhibitionClass", $doETC->ExhibitionClassID);
                        $doC=dbRoot::fromCache("Class", $doEC->ClassID);
                        print "<td>\n".$doEC->ClassNumber.")</td>\n<td>\n".$doC->Name."\n";
                        if ($doC->Description!=""){
                        //    print "\n (".$doC->Description.")\n";                                                        
                        }
                        print "</td>\n";
                    }
                    print "</tr>\n";
                } else {
                    print "<tr><td>\n&nbsp;</td>\n<td colspan='3'>No Classes Allocated</td></tr>\n";
                }
            }
            print "</table>\n";
            
        }
        
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
	
        dbRoot::showPage("Trophy");

}
?>