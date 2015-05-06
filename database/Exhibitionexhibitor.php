<?php
/**
 * Table Definition for exhibitionexhibitor
 */
require_once 'dbRoot.php';

class doExhibitionexhibitor extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibitionexhibitor';    // table name
    public $ID;                              // int(4)  primary_key not_null
    public $ExhibitionID;                    // int(4)  unique_key not_null default_7
    public $ExhibitorNumber;                 // int(4)  unique_key not_null
    public $ExhibitorID;                     // int(4)  unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_formHeaderText="Exhibitor";
    public $fb_linkDisplayFields=array("ExhibitorNumber");
    public $fb_userEditableFields=array("ID"/*,"ExhibitionID"*/,"ExhibitorNumber","ExhibitorID");
    public $fb_fieldLabels=array("ExhibitionID"=>"Show","ExhibitorID"=>"Competitor","ExhibitorNumber"=>"Number");
    public $fb_linkNewValue=array("ExhibitorID");
    public $fb_linkDisplayLevel=2;

    ###End Formbuilder Code
    function gatherExportDataObjects(&$ret,$Exhibitors=true){
        if (parent::gatherExportDataObjects($ret,$Exhibitors)){
            //Now Add Children
            //Exhibition
            $doE=dbRoot::fromCache("Exhibition",$this->ExhibitionID);
            $doE->gatherExportDataObjects($ret,$Exhibitors);
            //Exhibitor
            $doE=dbRoot::fromCache("Exhibitor",$this->ExhibitorID);
            $doE->gatherExportDataObjects($ret,$Exhibitors);
        }
    }

    
    function EditLink(){
        return AddButton("Edit","?action=edit&id=".$this->ID."#form");
    }
    
    function PrintList(){
       	$list=clone($this);
    	$list->find();
        print "<table>\n";
	while ($list->fetch()){
            $list->getLinks();
            print "<tr>\n";
            print "<td>\n";
            print "Competitor ".$list->ExhibitorNumber.": " ;
            print $list->_ExhibitorID->Name;
            print "</td>\n";
            print "<td>\n";
            print $list->EditLink();
            print "</td>\n";
            print "</tr>\n";
        }
        print "</table>\n";            
    }
}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
        dbRoot::showPage("ExhibitionExhibitor");        
}
?>