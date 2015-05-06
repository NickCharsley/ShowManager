<?php
include_once('ons_common.php');

class ExhibitorPageTest extends pagetests
{
	public $tables=array("Exhibitor","Defaults","Exhibition","ExhibitionExhibitor");
	
	function FileName(){
            return "ShowManager/Summer2013";
	}
	
	function getOutput(){            
            dbRoot::showPage("ExhibitionExhibitor");		
	}

	public function ListProvider(){
            return array(
                array("<tr>\n<td>\nCompetitor 1: Mr P George</td>\n<td>\n<a class='Button' href='\?action=edit&id=1#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 2: Mrs S M Payne</td>\n<td>\n<a class='Button' href='\?action=edit&id=2#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 3: Mrs  Clarke</td>\n<td>\n<a class='Button' href='\?action=edit&id=3#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 4: Mrs  Lee</td>\n<td>\n<a class='Button' href='\?action=edit&id=4#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 5: Mrs  Davey</td>\n<td>\n<a class='Button' href='\?action=edit&id=5#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 6:  E Metcalfe</td>\n<td>\n<a class='Button' href='\?action=edit&id=6#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 7: Mr A J Metcalfe</td>\n<td>\n<a class='Button' href='\?action=edit&id=7#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 8: Mr J Bird</td>\n<td>\n<a class='Button' href='\?action=edit&id=8#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 9: Mrs  Wagstaff</td>\n<td>\n<a class='Button' href='\?action=edit&id=9#form'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nCompetitor 10: Mr  Ginn</td>\n<td>\n<a class='Button' href='\?action=edit&id=10#form'><span>Edit</span></a>\n</td>\n</tr>"),
/**/
            );
	}
	
}
?>