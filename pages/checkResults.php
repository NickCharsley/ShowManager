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
 	include_once('ons_common.php');
 error_log("Enter", E_USER_NOTICE);
//************************************************
include_once("Exhibitionclass.php");

class doSummary extends doExhibitionClass {
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
    	return AddButton($this->Name(),"?action=edit&id=".$this->ID."#form");
    }
    function Name(){
    	return "Class ".$this->ClassNumber;
    }
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
	$defs=dbRoot::fromCache("Defaults",1);
	
	PageTitle();
	                
	$title="";
	PEARError($prize=Safe_DataObject_factory("Prize"));
	$prize->find();
	while($prize->fetch()){
	    $title.="<td>".$prize->Name."</td>";
	}

	PEARError($sec=Safe_DataObject_factory("ExhibitionSection"));
	$sec->ExhibitionID=$defs->ShowID;
	$sec->orderBy("sectionNumber*1");
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
		PEARError($summary=Safe_DataObject_factory("Summary"));
		$summary->ExhibitionID=$defs->ShowID;
		$summary->ExhibitionSectionID=$sec->ID;
		$summary->orderBy("ClassNumber*1");
		$summary->find();
		while ($summary->fetch()){
			$summary->getLinks();
			print "<tr>\n";
				print "<td colspan='2'>\n";
					print "&nbsp;".$summary->Name()."&nbsp;";
				print "</td>\n";
				print "<td>\n";
					print $summary->_ClassID->Name;
					if (strlen($summary->_ClassID->Description)>0)
						print " (".$summary->_ClassID->Description.")";
				print "</td>\n";
				$results=array(1=>"-",2=>"-",3=>"-");
				PEARError($res=Safe_DataObject_factory("ExhibitionClassPrize"));
				//DB_DataObject::debugLevel(5);
				$res->ExhibitionClassID=$summary->ID;
				$res->orderBy("PrizeID");
				$res->find();
				while ($res->fetch()){
                                    if (isset($res->ExhibitionExhibitorID)) {                                        
					$res->getLinks();
					$res->_ExhibitionExhibitorID->getLinks();
					$results[$res->PrizeID]=$res->_ExhibitionExhibitorID->ExhibitorNumber;
                                    }
				}
				foreach($results as $place){
					print "<td>$place</td>";
				}
			print "</tr>\n";
		}
	}
	print "</table>\n";
	print "<hr/>\n";
}
?>