<?php
include_once('ons_common.php');

class ClassesPageTest extends pagetests
{
	public $tables=array("ExhibitionSection","Defaults","Exhibition","Section","DefaultExhibitionSection");
	
	function FileName(){
		return "Pages/Classes";
	}
	
	function getOutput(){
		PEARError($section=DB_DataObject::factory("ExhibitionClass"));
	
		$defs=dbRoot::fromCache("Defaults",1);	
		$section->ExhibitionID=$defs->ShowID;
		
		if (PageTitle()){
			$section->PrintList();
			$section->PrintForm();
		}				
	}

	public function ListProvider(){
		return array(	
				array(""),	
				//array("<tr>\n<td>\nSection 1: Flowers</td>\n<td>\n<a class='Button' href='\?action=edit&id=35'><span>Edit</span></a>\n</td>\n</tr>"),
				//array("<tr>\n<td>\nSection 2: Pot Plants</td>\n<td>\n<a class='Button' href='\?action=edit&id=36'><span>Edit</span></a>\n</td>\n</tr>"),		
			);
	}

	
	
}
?>