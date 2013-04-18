<?php
include_once('ons_common.php');

class SponsorshipTest extends DataBaseTables
{
	public $tables=array("Sponsorship");
	
	function DataRowProvider(){
		return array(
			array(1,array("Name"=>"Sweet Pea 1","ExhibitionClassPrizeID"=>164,"Prize"=>"Unwin Voucher")),
			array(2,array("Name"=>"Sweet Pea 2","ExhibitionClassPrizeID"=>165,"Prize"=>"Unwin Voucher")),
			array(3,array("Name"=>"Vase of Flowers 1","ExhibitionClassPrizeID"=>184,"Prize"=>"£5 Mrs Gray")),
			array(4,array("Name"=>"Vase of Flowers 2","ExhibitionClassPrizeID"=>159,"Prize"=>"£3 Mrs Gray")),
			array(5,array("Name"=>"Vase of Flowers 3","ExhibitionClassPrizeID"=>159,"Prize"=>"£2 Mrs Gray")),
			array(6,array("Name"=>"Patio Pot 1","ExhibitionClassPrizeID"=>159,"Prize"=>"£7 Hardware Voucher")),
			array(7,array("Name"=>"Patio Pot 2","ExhibitionClassPrizeID"=>159,"Prize"=>"£3 Hardware Voucher")),
			array(8,array("Name"=>"Begonias","ExhibitionClassPrizeID"=>159,"Prize"=>"Unwin Voucher")),
			array(9,array("Name"=>"Flowering Plant 1","ExhibitionClassPrizeID"=>159,"Prize"=>"£10 Bickerdike Voucher")),
			array(10,array("Name"=>"Flowering Plant 2","ExhibitionClassPrizeID"=>159,"Prize"=>"£5 Bickerdike Voucher")),
			array(11,array("Name"=>"Foliage Plant 1","ExhibitionClassPrizeID"=>159,"Prize"=>"£10 Bickerdike Voucher")),
			array(12,array("Name"=>"Foliage Plant 2","ExhibitionClassPrizeID"=>159,"Prize"=>"£5 Bickerdike Voucher")),
			array(13,array("Name"=>"Hanging Basket 1","ExhibitionClassPrizeID"=>159,"Prize"=>"£8 Keeble Voucher")),
			array(14,array("Name"=>"Hanging Basket 2","ExhibitionClassPrizeID"=>159,"Prize"=>"£6 Keeble Voucher")),
			array(15,array("Name"=>"Hanging Basket 3","ExhibitionClassPrizeID"=>159,"Prize"=>"£4 Keeble Voucher")),
			array(16,array("Name"=>"Potatoes 1","ExhibitionClassPrizeID"=>159,"Prize"=>"Unwin Voucher")),
			array(17,array("Name"=>"Veg & Flower 1","ExhibitionClassPrizeID"=>159,"Prize"=>"Unwin Voucher")),
			array(18,array("Name"=>"Football World Cup 1","ExhibitionClassPrizeID"=>159,"Prize"=>"£6 Baldock Flowers Voucher")),
			array(19,array("Name"=>"Football World Cup 2","ExhibitionClassPrizeID"=>159,"Prize"=>"£4 Baldock Flower Voucher")),
			array(20,array("Name"=>"Football World Cup 3","ExhibitionClassPrizeID"=>159,"Prize"=>"£3 Baldock Flower Voucher")),
		);
	}

	function FileName(){
		return "Tables/Sponsorship";
	}	
}
?>