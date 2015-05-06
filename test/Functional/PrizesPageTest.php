<?php
include_once('ons_common.php');

class PrizesPageTest extends pagetests
{
	public $tables=array("Prize");
	
	function FileName(){
		return "Pages/Prize";
	}
	
	function getOutput(){
		dbRoot::showPage("Prize");		
	}

	public function ListProvider(){
		return array(
				array("<tr>\n<td>\nFirst</td>\n<td>\n&pound;1.50</td>\n<td>\n<td><a class='Button' href='\?action=edit&id=1'><span>Edit</span></a>\n</td></td>\n</tr>"),
				array("<tr>\n<td>\nSecond</td>\n<td>\n&pound;1.00</td>\n<td>\n<td><a class='Button' href='\?action=edit&id=2'><span>Edit</span></a>\n</td></td>\n</tr>"),
				array("<tr>\n<td>\nThird</td>\n<td>\n&pound;0.50</td>\n<td>\n<td><a class='Button' href='\?action=edit&id=3'><span>Edit</span></a>\n</td></td>\n</tr>"),
			);
	}
	
}
?>