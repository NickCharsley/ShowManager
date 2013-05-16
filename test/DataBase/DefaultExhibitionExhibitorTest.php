<?php
include_once('ons_common.php');

class DefaultExhibitionExhibitorTest extends DataBaseViews
{
	public $tables=array("DefaultExhibitionExhibitor");
	
	function DataRowProvider(){
		return array(				
				array(1,array("ExhibitionID"=>5,"ExhibitorNumber"=>1,"ExhibitorID"=>1)),
				array(2,array("ExhibitionID"=>5,"ExhibitorNumber"=>2,"ExhibitorID"=>2)),
				array(3,array("ExhibitionID"=>5,"ExhibitorNumber"=>3,"ExhibitorID"=>3)),
				array(4,array("ExhibitionID"=>5,"ExhibitorNumber"=>4,"ExhibitorID"=>4)),
				array(5,array("ExhibitionID"=>5,"ExhibitorNumber"=>5,"ExhibitorID"=>5)),
				array(6,array("ExhibitionID"=>5,"ExhibitorNumber"=>6,"ExhibitorID"=>6)),
				array(7,array("ExhibitionID"=>5,"ExhibitorNumber"=>7,"ExhibitorID"=>7)),
				array(8,array("ExhibitionID"=>5,"ExhibitorNumber"=>8,"ExhibitorID"=>8)),
				array(9,array("ExhibitionID"=>5,"ExhibitorNumber"=>9,"ExhibitorID"=>9)),
				array(10,array("ExhibitionID"=>5,"ExhibitorNumber"=>10,"ExhibitorID"=>10)),
		);
	}

	function FileName(){
		return "Tables/DefaultExhibitionExhibitor";
	}	
}
?>