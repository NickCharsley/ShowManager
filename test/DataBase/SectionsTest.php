<?php
include_once('ons_common.php');

class SectionTest extends DataBaseTables
{
	public $tables=array("Section");
	
	function DataRowProvider(){
		return array(
			array(1,array("Name"=>"Flowers")),
			array(2,array("Name"=>"Pot Plants")),
			array(3,array("Name"=>"Vegetables")),
			array(4,array("Name"=>"Fruit")),
			array(5,array("Name"=>"Homecraft")),
			array(6,array("Name"=>"Floral Art")),
			array(7,array("Name"=>"Photography")),
			array(8,array("Name"=>"Art")),
			array(9,array("Name"=>"Needlecraft/Hobbies")),
			array(10,array("Name"=>"Children")),
			array(11,array("Name"=>"2009 Section 1")),
			array(12,array("Name"=>"Spring Show","Description"=>"All Classes")),
			array(13,array("Name"=>"2012 Spring Show")),
		);
	}

	function getBackup($data=false){
		return	"\t<table name='Section'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>Name</column>\n".
				"\t\t<column>Description</column>\n".
	
				($data?
						//"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
						"\t\t<row><value>1</value><value>Flowers</value><value></value></row>\n".
						"\t\t<row><value>2</value><value>Pot Plants</value><value></value></row>\n".
						"\t\t<row><value>3</value><value>Vegetables</value><value></value></row>\n".
						"\t\t<row><value>4</value><value>Fruit</value><value></value></row>\n".
						"\t\t<row><value>5</value><value>Homecraft</value><value></value></row>\n".
						"\t\t<row><value>6</value><value>Floral Art</value><value></value></row>\n".
						"\t\t<row><value>7</value><value>Photography</value><value></value></row>\n".
						"\t\t<row><value>8</value><value>Art</value><value></value></row>\n".
						"\t\t<row><value>9</value><value>Needlecraft/Hobbies</value><value></value></row>\n".
						"\t\t<row><value>10</value><value>Children</value><value></value></row>\n".
						"\t\t<row><value>11</value><value>2009 Section 1</value><value></value></row>\n".
						"\t\t<row><value>12</value><value>Spring Show</value><value>All Classes</value></row>\n".
						"\t\t<row><value>13</value><value>2012 Spring Show</value><value></value></row>\n"						
					:"").
	
				"\t</table>\n";
	}
	
	
	
	function FileName(){
		return "Tables/Section";
	}	
}
?>