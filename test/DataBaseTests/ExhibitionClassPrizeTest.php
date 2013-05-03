<?php
include_once('ons_common.php');

class ExhibitionClassPrizeTest extends DataBaseTables
{
	public $tables=array("ExhibitionClassPrize","ExhibitionClass","Prize","ExhibitionExhibitor");
	
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

	function getBackup($data=false){
		return	"\t<table name='ExhibitionClassPrize'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>ExhibitionClassID</column>\n".
				"\t\t<column>PrizeID</column>\n".
				"\t\t<column>Prize</column>\n".
				"\t\t<column>Points</column>\n".
				"\t\t<column>ExhibitionExhibitorID</column>\n".
/**/
				($data? 
						"\t\t<row><value>1</value><value>97</value><value>1</value><value>1.50</value><value>15</value><value>33</value></row>\n".
						"\t\t<row><value>2</value><value>97</value><value>2</value><value>1.00</value><value>10</value><value>34</value></row>\n".
						"\t\t<row><value>3</value><value>1</value><value>1</value><value>1.50</value><value>15</value><value>1</value></row>\n".
						"\t\t<row><value>4</value><value>1</value><value>2</value><value>1.00</value><value>10</value><value>12</value></row>\n".
						"\t\t<row><value>5</value><value>1</value><value>3</value><value>0.50</value><value>5</value><value>15</value></row>\n".
						"\t\t<row><value>6</value><value>2</value><value>1</value><value>1.50</value><value>15</value><value>2</value></row>\n".
						"\t\t<row><value>7</value><value>2</value><value>2</value><value>1.00</value><value>10</value><value>14</value></row>\n".
						"\t\t<row><value>8</value><value>2</value><value>3</value><value>0.50</value><value>5</value><value>19</value></row>\n".
						"\t\t<row><value>9</value><value>3</value><value>1</value><value>1.50</value><value>15</value><value>3</value></row>\n".
						"\t\t<row><value>10</value><value>3</value><value>2</value><value>1.00</value><value>10</value><value>16</value></row>\n"
						:"").
/**/
						"\t</table>\n";
	}
	
	
	
	function FileName(){
		return "Tables/ExhibitionClassPrize";
	}	
}
?>