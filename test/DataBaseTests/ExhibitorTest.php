<?php
include_once('ons_common.php');

class ExhibitorTest extends DataBaseTables
{
	public $tables=array("Exhibitor");
	
	function DataRowProvider(){
		return array(
			array(1,array("Surname"=>"George","Member"=>0,"Title"=>"Mr","Initials"=>"P")),
			array(2,array("Surname"=>"Payne","Member"=>0,"Title"=>"Mrs","Initials"=>"S M")),
			array(3,array("Surname"=>"Clarke","Member"=>0,"Title"=>"Mrs",)),
			array(4,array("Surname"=>"Lee","Member"=>0,"Title"=>"Mrs",)),
			array(5,array("Surname"=>"Davey","Member"=>0,"Title"=>"Mrs",)),
			array(6,array("Surname"=>"Metcalfe","Member"=>1,"Title"=>"Mrs","Initials"=>"E")),
			array(7,array("Surname"=>"Metcalfe","Member"=>0,"Title"=>"Mr","Initials"=>"A J")),
			array(8,array("Surname"=>"Bird","Member"=>0,"Title"=>"Mr","Initials"=>"J")),
			array(9,array("Surname"=>"Wagstaff","Member"=>0,"Title"=>"Mrs",)),
			array(10,array("Surname"=>"Ginn","Member"=>0,"Title"=>"Mr",)),
		);
	}

	function getBackup($data=false){
		return	"\t<table name='Exhibitor'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>Surname</column>\n".
				"\t\t<column>Member</column>\n".
				"\t\t<column>Title</column>\n".
				"\t\t<column>Initials</column>\n".
	
				($data?
						//"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
						"\t\t<row><value>1</value><value>George</value><value>0</value><value>Mr</value><value>P</value></row>\n".
						"\t\t<row><value>2</value><value>Payne</value><value>0</value><value>Mrs</value><value>S M</value></row>\n".
						"\t\t<row><value>3</value><value>Clarke</value><value>0</value><value>Mrs</value></value><value></row>\n".
						"\t\t<row><value>4</value><value>Lee</value><value>Title</value><value>Mrs</value></value><value></row>\n".
						"\t\t<row><value>5</value><value>Davey</value><value>0</value><value>Mrs</value></value><value></row>\n".
						"\t\t<row><value>6</value><value>Metcalfe</value><value>1</value><value></value><value>E</value></row>\n".
						"\t\t<row><value>7</value><value>Metcalfe</value><value>0</value><value>Mr</value><value>A J</value></row>\n".
						"\t\t<row><value>8</value><value>Bird</value><value>0</value><value>Mr</value><value>J</value></row>\n".
						"\t\t<row><value>9</value><value>Wagstaff</value><value>0</value><value>Mrs</value><value></value></row>\n".
						"\t\t<row><value>10</value><value>Ginn</value><value>0</value><value>Mr</value></value><value></row>\n"
					:"").

				"\t</table>\n";
	}
	
	
	function FileName(){
		return "Tables/Exhibitor";
	}	
}
?>