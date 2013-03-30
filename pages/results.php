<?php
/*
 * File results.php
 * Created on 20 Aug 2009 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2009 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('common.php');
 trigger_error("Enter", E_USER_NOTICE);
//************************************************
include_once("ExhibitionClass.php");

class doResults extends doExhibitionClass {
	###Formbuilder Code
	public $fb_formHeaderText="Results";
	public $fb_userEditableFields=array("ID","__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID");
	public $fb_fieldLabels=array("__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID"=>"Prizes","ExhibitionID"=>"Show","ExhibitionSectionID"=>"Section","ClassID"=>"Class");
	public $fb_crossLinks=array(array("table"=>"exhibitionclassprize",
									  "fromField"=>"ExhibitionClassID",
									  "toField"=>"PrizeID"
									 )
							   );
	###End Formbuilder Code
	function EditLink(){
    	return AddButton("Class ".$this->ClassNumber,"?action=edit&id=".$this->ID."#form");
    }
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("common.php");

	PageTitle();

	PEARError($show=DB_DataObject::factory("Results"));
	$show->ExhibitionID=$defs->ShowID;
	if (isset($_GET['action']) and isset($_GET['id'])){
		$show->get($_GET['id']);
		if ($_GET['action']<>'edit')
			PEARError($show=DB_DataObject::factory("Results"));
	} else if (!isset($_POST['ID']))
		$show->get(1);

	$fg =&DB_DataObject_FormBuilder::create($show);
	$form =& $fg->getForm();
	if ($form->validate()) {
	    //DB_DataObject::debugLevel(5);
		$form->process(array(&$fg,'processForm'), false);
		$form->freeze();
		//DB_DataObject::debugLevel(0);
	}

	print "<a id='form' name='form'/>";
	$form->display();
	$title="";

	PEARError($prize=DB_DataObject::factory("Prize"));
	$prize->find();
	while($prize->fetch()){
		$title.="<td>".$prize->Name."</td>";
	}

	PEARError($sec=DB_DataObject::factory("ExhibitionSection"));
	$sec->ExhibitionID=$defs->ShowID;
	$sec->orderBy("sectionNumber");
	$sec->find();
	print "<table border='1'>\n";
	while ($sec->fetch()){
		$sec->getLinks();
		print "<tr>\n";
			print "<td colspan='3'>\n";
				print "Section ".$sec->SectionNumber.": " ;
				print $sec->_SectionID->Name;
			print "</td>";
			print $title;
		print "</tr>";
		PEARError($show=DB_DataObject::factory("Results"));
		$show->ExhibitionID=$defs->ShowID;
		$show->ExhibitionSectionID=$sec->ID;
		$show->orderBy("ClassNumber");
		$show->find();
		while ($show->fetch()){
			$show->getLinks();
			print "<tr>\n";
				print "<td colspan='2' align='right'>\n";
					print "&nbsp;".$show->EditLink();
				print "</td>\n";
				print "<td>\n";
					print $show->_ClassID->Name;
					if (strlen($show->_ClassID->Description)>0)
						print " (".$show->_ClassID->Description.")";
				print "</td>\n";
				$results=array(1=>"-",2=>"-",3=>"-");
				PEARError($res=DB_DataObject::factory("ExhibitionClassPrize"));
				//DB_DataObject::debugLevel(5);
				$res->ExhibitionClassID=$show->ID;
				$res->orderBy("PrizeID");
				$res->find();
				while ($res->fetch()){
					$res->getLinks();
					$results[$res->PrizeID]=$res->_ExhibitionExhibitorID->ExhibitorNumber;
				}
				foreach($results as $place){
					print "<td>$place</td>";
				}
			print "</tr>\n";
		}
	}
	print "</table>\n";

	print "<hr/>";
}
?>