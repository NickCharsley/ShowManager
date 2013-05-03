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
    function EditLink(){
    	print "<td>".AddButton('Edit',"?action=edit&id=".$this->ID)."</td>";
    }
    ###Formbuilder Code
	public $fb_crossLinks = array(array('table' => 'DefaultExhibitionTrophyClass',
                                   		'type' => 'select',
			                            'fromField' => 'TrophyID',
			                            'toField' => 'ExhibitionClassID'));
	public $fb_formHeaderText="Trophy";
	public $fb_fieldLabels=array("ExhibitionID"=>"Show","Name"=>"Trophy Name","__crossLink_DefaultExhibitionTrophyClass_TrophyID_ExhibitionClassID"=>"Components");
	public $fb_userEditableFields=array("ID","Name","Member","__crossLink_DefaultExhibitionTrophyClass_TrophyID_ExhibitionClassID");
	public $fb_linkDisplayLevel=2;
	###End Formbuilder Code

}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
	$defs=dbRoot::fromCache("Defaults",1);
	
	PageTitle();
		
	DB_DataObject::debuglevel(0);
	$dotrophy=DB_DataObject::factory("Trophy");
	$dotrophy->ExhibitionID=$defs->ShowID;	
	if (isset($_GET['action']) and isset($_GET['id'])){
		$dotrophy->get($_GET['id']);
	}
	

	$fg =&DB_DataObject_FormBuilder::create($dotrophy);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    DB_DataObject::debugLevel(0);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
	}

	$trophy=DB_DataObject::factory("Trophy");
	$trophy->ExhibitionID=$defs->ShowID;
	$trophy->find();
	print "<table>\n";
	while ($trophy->fetch()){
		print "<tr>\n";
			print "<td>\n";
				print $trophy->Name;
			print "</td>\n";
			print "<td>\n";
				print $trophy->Prize;
			print "</td>\n";
			print "<td>\n";
				print $trophy->EditLink();
			print "</td>\n";
		print "</tr>\n";
	}
	print "</table>\n";

	print AddButton("New","?action=new");

	print "<hr/>";
	$form->display();

	print "<hr/>";

}
?>