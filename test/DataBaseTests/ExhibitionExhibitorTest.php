<?php
include_once('ons_common.php');

class ExhibitionExhibitorTest extends DataBaseTables
{
	public $tables=array("ExhibitionExhibitor");
	
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

	function getBackup($data=false){
		return	"\t<table name='ExhibitionExhibitor'>\n".
				"\t\t<column>ID</column>\n".
				"\t\t<column>ExhibitionID</column>\n".
				"\t\t<column>ExhibitorNumber</column>\n".
				"\t\t<column>ExhibitorID</column>\n".
	
				($data?
						//"\t\t<row><value>1</value><value>Sweet Peas</value><value>3 x one cultivars</value></row>\n".
						"\t\t<row><value>1</value><value>5</value><value>1</value><value>1</value></row>\n".
						"\t\t<row><value>2</value><value>5</value><value>2</value><value>2</value></row>\n".
						"\t\t<row><value>3</value><value>5</value><value>3</value><value>3</value></row>\n".
						"\t\t<row><value>4</value><value>5</value><value>4</value><value>4</value></row>\n".
						"\t\t<row><value>5</value><value>5</value><value>5</value><value>5</value></row>\n".
						"\t\t<row><value>6</value><value>5</value><value>6</value><value>6</value></row>\n".
						"\t\t<row><value>7</value><value>5</value><value>7</value><value>7</value></row>\n".
						"\t\t<row><value>8</value><value>5</value><value>8</value><value>8</value></row>\n".
						"\t\t<row><value>9</value><value>5</value><value>9</value><value>9</value></row>\n".
						"\t\t<row><value>10</value><value>5</value><value>10</value><value>10</value></row>\n"
						
					:"").
	
				"\t</table>\n";
	}
	
	
	function FileName(){
		return "Tables/ExhibitionExhibitor";
	}	
}
?>