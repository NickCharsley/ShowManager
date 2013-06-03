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
/** /
    function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID);
    }

    function PrintList(){
    	$list=clone($this);
    	$list->find();
    	print "<table>\n";
    	while ($list->fetch()){
        //$list->getLinks();
        print "<tr>\n";
                print "<td>\n";
                print $list->Name;
                if (strlen($list->Description)>0)
                        print " (".$list->Description.")";
                print "</td>\n";
                print "<td>\n";
                print $list->EditLink();
                print "</td>\n";
                print "</tr>\n";
        }
    	print "</table>\n";    	 
    }
    /**/
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
/** /
	include_once("common.php");

	dbRoot::showPage("Class");
/**/

}
?>