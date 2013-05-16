<?php
include_once('ons_common.php');

class SponsorshipTest extends DataBaseTables
{
	public $tables=array("Sponsorship","ExhibitionClassPrize");
	
	function DataRowProvider(){
		return array(
			array(1,array("Name"=>"Sweet Pea 1","ExhibitionClassPrizeID"=>95,"Prize"=>"Unwin Voucher")),
			array(2,array("Name"=>"Sweet Pea 2","ExhibitionClassPrizeID"=>96,"Prize"=>"Unwin Voucher")),
			array(3,array("Name"=>"Vase of Flowers 1","ExhibitionClassPrizeID"=>97,"Prize"=>"£5 Mrs Gray")),
			array(4,array("Name"=>"Vase of Flowers 2","ExhibitionClassPrizeID"=>98,"Prize"=>"£3 Mrs Gray")),
			array(5,array("Name"=>"Vase of Flowers 3","ExhibitionClassPrizeID"=>99,"Prize"=>"£2 Mrs Gray")),
			array(6,array("Name"=>"Patio Pot 1","ExhibitionClassPrizeID"=>100,"Prize"=>"£7 Hardware Voucher")),
			array(7,array("Name"=>"Patio Pot 2","ExhibitionClassPrizeID"=>101,"Prize"=>"£3 Hardware Voucher")),
			array(8,array("Name"=>"Begonias","ExhibitionClassPrizeID"=>102,"Prize"=>"Unwin Voucher")),
			array(9,array("Name"=>"Flowering Plant 1","ExhibitionClassPrizeID"=>103,"Prize"=>"£10 Bickerdike Voucher")),
			array(10,array("Name"=>"Flowering Plant 2","ExhibitionClassPrizeID"=>104,"Prize"=>"£5 Bickerdike Voucher")),
		);
	}

	function getBackup($data=false){
		return	"\t<table name='Sponsorship'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>Name</column>\n".
				"\t\t<column>ExhibitionClassPrizeID</column>\n".
				"\t\t<column>Prize</column>\n".
	
				($data? 
						//"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
						"\t\t<row><value>1</value><value>Sweet Pea 1</value><value>95</value><value>Unwin Voucher</value></row>\n".
						"\t\t<row><value>2</value><value>Sweet Pea 2</value><value>96</value><value>Unwin Voucher</value></row>\n".
						"\t\t<row><value>3</value><value>Vase of Flowers 1</value><value>97</value><value>£5 Mrs Gray</value></row>\n".
						"\t\t<row><value>4</value><value>Vase of Flowers 2</value><value>98</value><value>£3 Mrs Gray</value></row>\n".
						"\t\t<row><value>5</value><value>Vase of Flowers 3</value><value>99</value><value>£2 Mrs Gray</value></row>\n".
						"\t\t<row><value>6</value><value>Patio Pot 1</value><value>100</value><value>£7 Hardware Voucher</value></row>\n".
						"\t\t<row><value>7</value><value>Patio Pot 2</value><value>101</value><value>£3 Hardware Voucher</value></row>\n".
						"\t\t<row><value>8</value><value>Begonias</value><value>102</value><value>Unwin Voucher</value></row>\n".
						"\t\t<row><value>9</value><value>Flowering Plant 1</value><value>103</value><value>£10 Bickerdike Voucher</value></row>\n".
						"\t\t<row><value>10</value><value>Flowering Plant 2</value><value>104</value><value>£5 Bickerdike Voucher</value></row>\n"
					:"").
	
						"\t</table>\n";
	}
	
	
	function FileName(){
		return "Tables/Sponsorship";
	}	
}
?>