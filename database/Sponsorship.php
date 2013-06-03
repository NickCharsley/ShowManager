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
	public $fb_linkDisplayLevel=3;
	###End Formbuilder Code

    function fetch(){
        if (!parent::fetch()) return false;
        //Need to replace £ with &pound;
        $this->Prize = str_replace("Â£", "&pound;", $this->Prize);
        return true;
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
                print "<td>\n";
                    print $list->Name;
                print "</td>\n";
                print "<td>\n";
                    print $list->Prize;
                print "</td>\n";
                print "<td>\n";
                    print $list->EditLink();
                print "</td>\n";
            print "</tr>\n";
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