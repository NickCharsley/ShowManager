<?php
include_once('ons_common.php');

class TrophyTest extends DataBaseTables
{
	public $tables=array("Trophy");
	
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

	
	function getBackup($data=false){
		return	"\t<table name='Trophy'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>ExhibitionID</column>\n".
				"\t\t<column>Name</column>\n".
				"\t\t<column>Member</column>\n".
	
				($data? 
						//"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
						"\t\t<row><value>1</value><value>1</value><value>George Ashton Shield</value><value>0</value></row>\n".
						"\t\t<row><value>2</value><value>1</value><value>Don Kenny Cup</value><value>0</value></row>\n".
						"\t\t<row><value>3</value><value>1</value><value>Scott Shield</value><value>0</value></row>\n".
						"\t\t<row><value>4</value><value>1</value><value>Sheild for most points in Show</value><value>0</value></row>\n".
						"\t\t<row><value>5</value><value>1</value><value>Cup for most points in Vegetables</value><value>0</value></row>\n".
						"\t\t<row><value>6</value><value>1</value><value>Cup for most points in Flowers & Pot Plants</value><value>0</value></row>\n"						
						:"").
	
						"\t</table>\n";
	}
	
	
	function FileName(){
		return "Tables/Trophy";
	}	
}
?>