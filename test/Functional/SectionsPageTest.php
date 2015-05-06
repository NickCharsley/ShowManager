<?php
include_once('ons_common.php');

class SectionsPageTest extends pagetests
{
	public $tables=array("ExhibitionSection","Defaults","Exhibition","Section");
	
	function FileName(){
		return "Pages/Sections";
	}
	
	function getOutput(){
		dbRoot::showPage("ExhibitionSection");	
	}

	public function ListProvider(){
		return array(		
				array("<tr>\n<td>\nSection 1: Flowers</td>\n<td>\n<a class='Button' href='\?action=edit&id=35'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSection 2: Pot Plants</td>\n<td>\n<a class='Button' href='\?action=edit&id=36'><span>Edit</span></a>\n</td>\n</tr>"),		
			);
	}

	
	
}
?>