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
include_once("ExhibitionClass.php");

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
	

	print AddButton("Calculate Prize Fund",$root."/pages/summary.php?calc=true");
	print "<br/><br/>";
	if (isset($_GET['calc'])){
		$sql="update `exhibitionclassprize` " .
			 "set prize=(select prize from prize where prize.id=prizeid)," .
			 "points=(select points from prize where prize.id=prizeid)" .
			 "where `exhibitionclassprize`.`ExhibitionClassID` in (" .
			 "SELECT exhibitionclass.ID " .
			 "FROM exhibitionclass " .
			 "INNER JOIN defaults " .
			 "ON (exhibitionclass.ExhibitionID = defaults.ShowID))";
		PEARError($db->query($sql));
	}
	$sql="delete from exhibitionclassprize where prizeid=0";
	PEARError($db->query($sql));

	$title="";
	PEARError($prize=DB_DataObject::factory("Prize"));
	$prize->find();
	while($prize->fetch()){
		$title.="<td>".$prize->Name."</td>";
	}

	$trophy=DB_DataObject::factory("Trophy");
	$trophy->ExhibitionID=$defs->ShowID;
	$trophy->find();
	print "<h3>Trophies</h3>";
	print "<table border='1'>\n";
	while ($trophy->fetch()){
		print "<tr>\n";
			print "<td colspan='3'>\n";
				print $trophy->Name;
			print "</td>\n";
		print "</tr>\n";
		$trophyResults=DB_DataObject::factory("TrophyResults");
		$trophyResults->TrophyID=$trophy->ID;
		$trophyResults->find();
		$i=0;
		while ($trophyResults->fetch() and $i++<3){
			$trophyResults->getLinks();
			print "<tr>\n";
				print "<td>&nbsp;</td>\n";
				print "<td>\n";
					print $trophyResults->_ExhibitorID->Name;
				print "</td>\n";
				print "<td>\n";
					print $trophyResults->Points;
				print "</td>\n";
			print "</tr>\n";
		}
	}
	print "</table>\n";
	print "<hr/>\n";


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
		PEARError($summary=DB_DataObject::factory("Summary"));
		$summary->ExhibitionID=$defs->ShowID;
		$summary->ExhibitionSectionID=$sec->ID;
		$summary->orderBy("ClassNumber");
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
				PEARError($res=DB_DataObject::factory("ExhibitionClassPrize"));
				//DB_DataObject::debugLevel(5);
				$res->ExhibitionClassID=$summary->ID;
				$res->orderBy("PrizeID");
				$res->find();
				while ($res->fetch()){
					$res->getLinks();
					$res->_ExhibitionExhibitorID->getLinks();
					$results[$res->PrizeID]=$res->_ExhibitionExhibitorID->_ExhibitorID->Name;
				}
				foreach($results as $place){
					print "<td>$place</td>";
				}
			print "</tr>\n";
		}
	}
	print "</table>\n";
	print "<hr/>\n";

	PEARError($exhibitor=DB_DataObject::factory("DefaultPrizeFund"));
	print "<table border='0'>\n";
	$exhibitor->find();
	while ($exhibitor->fetch()){
		$exhibitor->getLinks();
		//print "<table border='0' width='100%'>\n";
		PEARError($number=DB_DataObject::factory("ExhibitionExhibitor"));
		$number->ExhibitorID=$exhibitor->ID;
		$number->ExhibitionID=$defs->ShowID;
		$number->find();
		while ($number->fetch()){
			print "<tr>\n";
				print "<td colspan='5'>\n";
					print $exhibitor->_ID->Name." (".$number->ExhibitorNumber.")";
				print "</td>\n";
			print "</tr>\n";
			PEARError($prize=DB_DataObject::factory("ExhibitionClassPrize"));
			$prize->ExhibitionExhibitorID=$number->ID;
			$prize->find();
			while ($prize->fetch()){
				$prize->getLinks();
				if ($prize->ExhibitionClassID) $prize->_ExhibitionClassID->getLinks();
				print "<tr>\n";
					print "<td></td><td></td><td>\n";
						print $prize->_ExhibitionClassID->_ExhibitionSectionID->Name;
					print "</td>\n";
					print "<td>\n";
						print "Class ".$prize->_ExhibitionClassID->ClassNumber.": ".$prize->_ExhibitionClassID->_ClassID->Name." (".$prize->_ExhibitionClassID->_ClassID->Description.")";
					print "</td>\n";
					print "<td>\n";
						print $prize->_PrizeID->Name;
					print "</td>\n";
				print "</tr>\n";
			}
		}
		print "<tr><td colspan='2'>Prize Money: </td><td>�".$exhibitor->Prize."</td></tr>\n";
		print "<tr><td colspan='5'><hr/></td></tr>\n";
//		print "</table>\n";
	}
	print "</table>\n";
	print "<hr/>\n";
	
	PEARError($exhibitor=DB_DataObject::factory("DefaultPrizeFund"));
	print "<table border='0'>\n";
	$exhibitor->orderBy('Points DESC');
	$exhibitor->find();
	while ($exhibitor->fetch()){
		$exhibitor->getLinks();
		print "<tr>\n";
		print "<td>\n";
		print $exhibitor->_ID->Name;
		print "</td>\n";
		print "<td>\n";
		print $exhibitor->Points;
		print "</td>\n";
		print "</tr>\n";
	}
	print "</table>\n";
	print "<hr/>\n";
	
}
?>