<?php
include_once('ons_common.php');

class TrophyResultsTest extends DataBaseViews
{
	public $tables=array("TrophyResults");
	
	function DataRowProvider(){
		return array(
			array(1,array("ExhibitionID"=>1,"Name"=>"George Ashton Shield","Member"=>0)),
			array(2,array("ExhibitionID"=>1,"Name"=>"Don Kenny Cup","Member"=>0)),
			array(3,array("ExhibitionID"=>1,"Name"=>"Scott Shield","Member"=>0)),
			array(4,array("ExhibitionID"=>1,"Name"=>"Sheild for most points in Show","Member"=>0)),
			array(5,array("ExhibitionID"=>1,"Name"=>"Cup for most points in Vegetables","Member"=>0)),
			array(6,array("ExhibitionID"=>1,"Name"=>"Cup for most points in Flowers & Pot Plants","Member"=>0)),
		);
	}

	function FileName(){
		return "Tables/TrophyResults";
	}	
}
?>