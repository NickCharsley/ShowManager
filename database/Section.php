<?php
/**
 * Table Definition for section
 */
require_once 'dbRoot.php';

class doSection extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'section';             // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null
    public $Description;                     // varchar(255)  

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
    public $fb_formHeaderText="Section";
    public $fb_linkDisplayFields=array("Name");
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
//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");
	PEARError($show=DB_DataObject::factory("Section"));
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("Section"));
	}

	PageTitle();

	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	PEARError($show=DB_DataObject::factory("Section"));
	$show->find();
	print "<table>\n";
	while ($show->fetch()){
		print "<tr>\n";
			print "<td>\n";
				print $show->Name;
			print "</td>\n";
			print "<td>\n";
				print $show->EditLink();
			print "</td>\n";
			print "<td>\n";
				print $show->DefaultLink();
			print "</td>\n";
		print "</tr>\n";
	}
	print "</table>\n";

	print "<hr/>";
	print AddButton("New","?action=new");
	print "<br><br>";
	$form->display();
	print "<hr/>";
}
?>