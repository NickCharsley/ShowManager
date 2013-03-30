<?php
/**
 * Table Definition for defaults
 */
require_once 'DB/DataObject.php';

class doDefaults extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'defaults';            // table name
    public $id;                              // int(4)  primary_key not_null
    public $ShowName;                        // varchar(255)  
    public $ShowID;                          // int(4)  

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('doDefaults',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
	###Formbuilder Code
	public $fb_formHeaderText="Society Name";
	public $fb_fieldsToRender=array("ShowName");
	public $fb_fieldsRequired=array("ShowName");
	###End Formbuilder Code

}
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	$defs=DB_DataObject::factory("Defaults");
	if (!$defs->get(1)) unset($defs->id);
	$fg =&DB_DataObject_FormBuilder::create($defs);
	$form =& $fg->getForm();
	if ($form->validate()) {
		DB_DataObject::debugLevel(5);
	    $form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}
	$form->display();
}
?>