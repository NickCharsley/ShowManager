<?php
include_once('ons_common.php');

class LoadSummer2013Test extends pagetests
{
	public $tables=array("ExhibitionClass","ExhibitionSection","Defaults","Exhibition","Section","Class","Trophy","ExhibitionTrophyClass","Prize","ExhibitionClassPrize");
	
	function FileName(){
            //return "Pages/Classes";
            return "ShowManager/Summer2013";            
	}
	
	function getOutput(){
            dbRoot::showPage("ExhibitionClass");		
	}

	public function ListProvider(){
            return array(
                    array("<tr>\n<td colspan='3'>\nSection 1: Flowers\n</td>\n</tr>"),
                );
	}
	
}
?>