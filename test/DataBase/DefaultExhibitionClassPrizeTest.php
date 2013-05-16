<?php
include_once('ons_common.php');

class DefaultExhibitionClassPrizeTest extends DataBaseViews
{
	public $tables=array("DefaultExhibitionClassPrize","ExhibitionClass","Prize","ExhibitionExhibitor");
	
	function DataRowProvider(){
		return array(				
				array(1,array("ExhibitionClassID"=>97,"PrizeID"=>1,"Prize"=>"1.50","Points"=>15,"ExhibitionExhibitorID"=>33)),
				array(2,array("ExhibitionClassID"=>97,"PrizeID"=>2,"Prize"=>"1.00","Points"=>10,"ExhibitionExhibitorID"=>34)),
				array(3,array("ExhibitionClassID"=>1,"PrizeID"=>1,"Prize"=>"1.50","Points"=>15,"ExhibitionExhibitorID"=>1)),
				array(4,array("ExhibitionClassID"=>1,"PrizeID"=>2,"Prize"=>"1.00","Points"=>10,"ExhibitionExhibitorID"=>12)),
				array(5,array("ExhibitionClassID"=>1,"PrizeID"=>3,"Prize"=>"0.50","Points"=>5,"ExhibitionExhibitorID"=>15)),
				array(6,array("ExhibitionClassID"=>2,"PrizeID"=>1,"Prize"=>"1.50","Points"=>15,"ExhibitionExhibitorID"=>2)),
				array(7,array("ExhibitionClassID"=>2,"PrizeID"=>2,"Prize"=>"1.00","Points"=>10,"ExhibitionExhibitorID"=>14)),
				array(8,array("ExhibitionClassID"=>2,"PrizeID"=>3,"Prize"=>"0.50","Points"=>5,"ExhibitionExhibitorID"=>19)),
				array(9,array("ExhibitionClassID"=>3,"PrizeID"=>1,"Prize"=>"1.50","Points"=>15,"ExhibitionExhibitorID"=>3)),
				array(10,array("ExhibitionClassID"=>3,"PrizeID"=>2,"Prize"=>"1.00","Points"=>10,"ExhibitionExhibitorID"=>16)),
		);
	}

	function FileName(){
		return "Tables/DefaultExhibitionClassPrize";
	}	
}
?>