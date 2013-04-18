<?php
include_once('ons_common.php');

class TrophyTest extends DataBaseTables
{
	public $tables=array("Trophy");
	
	function DataRowProvider(){
		return array(
			array(1,array("ExhibitionID"=>3,"Name"=>"Sweet Pea","Member"=>0)),
			array(2,array("ExhibitionID"=>3,"Name"=>"Flowers","Member"=>0)),
			array(3,array("ExhibitionID"=>5,"Name"=>"George Ashton Shield","Member"=>0)),
			array(4,array("ExhibitionID"=>5,"Name"=>"Don Kenny Cup","Member"=>0)),
			array(5,array("ExhibitionID"=>5,"Name"=>"Scott Shield","Member"=>0)),
			array(6,array("ExhibitionID"=>5,"Name"=>"Sheild for most points in Show","Member"=>0)),
			array(7,array("ExhibitionID"=>5,"Name"=>"Cup for most points in Vegetables","Member"=>0)),
			array(8,array("ExhibitionID"=>5,"Name"=>"Cup for most points in Flowers & Pot Plants","Member"=>0)),
			array(9,array("ExhibitionID"=>6,"Name"=>"Glass","Member"=>0)),
			array(10,array("ExhibitionID"=>7,"Name"=>"Most Points Vegetables","Member"=>0)),
			array(11,array("ExhibitionID"=>7,"Name"=>"Most Points Flowers & Pot Plants","Member"=>0)),
			array(12,array("ExhibitionID"=>2,"Name"=>"Most Points Children 7/11","Member"=>0)),
			array(13,array("ExhibitionID"=>2,"Name"=>"Most Points Needlecraft/Hobbies","Member"=>0)),
			array(14,array("ExhibitionID"=>7,"Name"=>"Don Kenny Trophy","Member"=>0)),
			array(15,array("ExhibitionID"=>2,"Name"=>"Most Points in Show","Member"=>0)),
			array(16,array("ExhibitionID"=>7,"Name"=>"George Ashton Shield","Member"=>0)),
			array(17,array("ExhibitionID"=>7,"Name"=>"Scott Shield","Member"=>0)),
			array(18,array("ExhibitionID"=>7,"Name"=>"Baldock School","Member"=>0)),
			array(19,array("ExhibitionID"=>7,"Name"=>"Most Points in Show","Member"=>0)),
			array(20,array("ExhibitionID"=>7,"Name"=>"Most Points Children 7/11","Member"=>0)),
			array(21,array("ExhibitionID"=>7,"Name"=>"Medal Children 3/6","Member"=>0)),
			array(22,array("ExhibitionID"=>7,"Name"=>"Most Points Needlecraft/Hobbies","Member"=>0)),
			array(23,array("ExhibitionID"=>9,"Name"=>"Most Points in Show","Member"=>0)),
			array(24,array("ExhibitionID"=>8,"Name"=>"Most Points in Show","Member"=>0)),
			array(25,array("ExhibitionID"=>9,"Name"=>"George Ashton Shield","Member"=>0)),
			array(26,array("ExhibitionID"=>9,"Name"=>"Most Points Sweet Peas 1/2","Member"=>0)),				
		);
	}

	function FileName(){
		return "Tables/Trophy";
	}	
}
?>