<?php
/**
 * Table Definition for exhibition
 */
require_once 'dbRoot.php';

class doExhibition extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibition';          // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
	public $fb_formHeaderText="Show";
	public $fb_linkDisplayFields=array("Name");
	###End Formbuilder Code

    function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID);
    }
    
    function DefaultLink(){
    	$defs=dbRoot::fromCache("Defaults",1);
    	if ($this->ID==$defs->ShowID)
    		return "(Default)";
    	else
    		return AddButton("Set as Default","?action=default&id=".$this->ID);
    }
    
    function printList(){
    	$list=clone($this);
    	$list->find();
    	print "<table>\n";
    	while ($list->fetch()){
    		print "<tr>\n";
    		print "<td>\n";
    		print $list->Name;
    		print "</td>\n";
    		print "<td>\n";
    		print $list->EditLink();
    		print "</td>\n";
    		print "<td>\n";
    		print $list->DefaultLink();
    		print "</td>\n";
    		print "</tr>\n";
    	}
    	print "</table>\n";    	 
    }    
}
//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
	
	PEARError($show=DB_DataObject::factory("Exhibition"));
	
	if (PageTitle()){
		$show->UpdateDefaults();
		$show->PrintList();
		$show->PrintForm();
	}
}
?>