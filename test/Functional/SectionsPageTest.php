<?php
include_once('ons_common.php');

class SectionsPageTest extends pagetests
{
	public $tables=array("ExhibitionSection","Defaults","Exhibition","Section");
	
	function FileName(){
		return "Pages/Sections";
	}
	
	function getOutput(){
		PEARError($section=DB_DataObject::factory("ExhibitionSection"));
	
		$defs=dbRoot::fromCache("Defaults",1);	
		$section->ExhibitionID=$defs->ShowID;
		
		if (PageTitle()){
			$section->PrintList();
			$section->PrintForm();
		}				
	}

	public function ListProvider(){
		return array(		
				array("<tr>\n<td>\nSection 1: Flowers</td>\n<td>\n<a class='Button' href='\?action=edit&id=35'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSection 2: Pot Plants</td>\n<td>\n<a class='Button' href='\?action=edit&id=36'><span>Edit</span></a>\n</td>\n</tr>"),		
			);
	}

	
	
}
?>