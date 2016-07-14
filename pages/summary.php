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
	

	print AddButton("Calculate Prize Fund",$root."/pages/summary.php?calc=true");
	print "<br/><br/>";
        dbRoot::CalculatePrizeFund(isset($_GET['calc']));
                
	$title="";
	PEARError($prize=Safe_DataObject_factory("Prize"));
	$prize->find();
	while($prize->fetch()){
		$title.="<td>".$prize->Name."</td>";
	}

	$trophy=Safe_DataObject_factory("Trophy");
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
		$trophyResults=Safe_DataObject_factory("TrophyResults");
		$trophyResults->TrophyID=$trophy->ID;
		$trophyResults->find();
		$i=0;
		while ($trophyResults->fetch() and $i++<3){
			$trophyResults->getLinks();
			print "<tr>\n";
				print "<td>&nbsp;</td>\n";
				print "<td>\n";
					print $trophyResults->ExhibitorName;
				print "</td>\n";
				print "<td>\n";
					print $trophyResults->Points;
				print "</td>\n";
			print "</tr>\n";
		}
	}
	print "</table>\n";
	print "<hr/>\n";


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
					$results[$res->PrizeID]=$res->_ExhibitionExhibitorID->ExhibitorName;
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

	PEARError($exhibitor=Safe_DataObject_factory("DefaultPrizeFund"));
	print "<table border='0'>\n";
	$exhibitor->find();
	while ($exhibitor->fetch()){
		$exhibitor->getLinks();
		//print "<table border='0' width='100%'>\n";
		PEARError($number=Safe_DataObject_factory("ExhibitionExhibitor"));
		$number->ID=$exhibitor->ID;
		$number->ExhibitionID=$defs->ShowID;
		$number->find();
		while ($number->fetch()){
			print "<tr>\n";
				print "<td colspan='5'>\n";
					print $number->Name." (".$number->ExhibitorNumber.")";
				print "</td>\n";
			print "</tr>\n";
			PEARError($prize=Safe_DataObject_factory("ExhibitionClassPrize"));
			$prize->ExhibitionExhibitorID=$number->ID;
			$prize->find();
			while ($prize->fetch()){
				print "<tr>\n";
					print "<td></td><td></td><td>\n";
						print $prize->SectionName();
					print "</td>\n";
					print "<td>\n";
						print "Class ".$prize->ClassNumber().": ".$prize->ClassName();
                                                $desc=$prize->ClassDescription();
                                                if ($desc<>"")
                                                    print " ($desc)";
					print "</td>\n";
					print "<td>\n";
						print $prize->PrizeName();
					print "</td>\n";
				print "</tr>\n";
			}
		}
		print "<tr><td colspan='2'>Prize Money: </td><td>£".$exhibitor->Prize."</td>";
                print "<td colspan='2' align='right'>Points: ".$exhibitor->Points."</td></tr>\n";
		print "<tr><td colspan='5'><hr/></td></tr>\n";
//		print "</table>\n";
	}
	print "</table>\n";
	print "<hr/>\n";
	
	PEARError($exhibitor=Safe_DataObject_factory("DefaultPrizeFund"));
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