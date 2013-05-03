<?php
include_once('ons_common.php');

class ExhibitionTest extends DataBaseTables
{
	public $tables=array("Exhibition");
	
	function DataRowProvider(){
		return array(
			array(1,array("Name"=>"Summer Show 2008")),
			array(2,array("Name"=>"Spring Show 2009")),
			array(3,array("Name"=>"Summer Show 2009")),
			array(4,array("Name"=>"Spring show 2010")),
			array(5,array("Name"=>"Summer Show 2010")),
			array(6,array("Name"=>"Spring Show 2011")),
			array(7,array("Name"=>"Summer Show 2011")),
			array(8,array("Name"=>"Spring Show 2012")),
			array(9,array("Name"=>"Summer Show 2012")),
		);
	}

	function getBackup($data=false){
		return	"\t<table name='Exhibition'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>Name</column>\n".
	
				($data?
						//"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>".
						"\t\t<row><value>1</value><value>Summer Show 2008</value></row>".
						"\t\t<row><value>2</value><value>Spring Show 2009</value></row>".
						"\t\t<row><value>3</value><value>Summer Show 2009</value></row>".
						"\t\t<row><value>4</value><value>Spring show 2010</value></row>".
						"\t\t<row><value>5</value><value>Summer Show 2010</value></row>".
						"\t\t<row><value>6</value><value>Spring Show 2011</value></row>".
						"\t\t<row><value>7</value><value>Summer Show 2011</value></row>".
						"\t\t<row><value>8</value><value>Spring Show 2012</value></row>".
						"\t\t<row><value>9</value><value>Summer Show 2012</value></row>"

					:"").
	
				"\t</table>\n";
	}
	
	
	function FileName(){
		return "Tables/Exhibition";
	}	
}
?>