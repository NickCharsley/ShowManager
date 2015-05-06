<?php
include_once('ons_common.php');

class ShowsPageTest extends pagetests
{
	public $tables=array("Exhibition","Defaults");
	
	function FileName(){
		return "Pages/Shows";
	}
	
	function getOutput(){
		dbRoot::showPage("Exhibition");	
	}
	
	public function ListProvider(){
		return array(				
				array("<tr>\n<td>\nSummer Show 2008</td>\n<td>\n<a class='Button' href='\?action=edit&id=1'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=1'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSpring Show 2009</td>\n<td>\n<a class='Button' href='\?action=edit&id=2'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=2'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSummer Show 2009</td>\n<td>\n<a class='Button' href='\?action=edit&id=3'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=3'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSpring show 2010</td>\n<td>\n<a class='Button' href='\?action=edit&id=4'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=4'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSummer Show 2010</td>\n<td>\n<a class='Button' href='\?action=edit&id=5'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=5'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSpring Show 2011</td>\n<td>\n<a class='Button' href='\?action=edit&id=6'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=6'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSummer Show 2011</td>\n<td>\n<a class='Button' href='\?action=edit&id=7'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=7'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSpring Show 2012</td>\n<td>\n<a class='Button' href='\?action=edit&id=8'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='\?action=default&id=8'><span>Set as Default</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>\nSummer Show 2012</td>\n<td>\n<a class='Button' href='\?action=edit&id=9'><span>Edit</span></a>\n</td>\n<td>\n\(Default\)</td>\n</tr>"),
			);
	}
}
?>