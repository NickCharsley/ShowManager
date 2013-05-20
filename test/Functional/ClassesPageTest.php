<?php
include_once('ons_common.php');

class ClassesPageTest extends pagetests
{
	public $tables=array("ExhibitionClass","ExhibitionSection","Defaults","Exhibition","Section","Class","DefaultExhibitionSection");
	
	function FileName(){
		return "Pages/Classes";
	}
	
	function getOutput(){
		dbRoot::showPage("ExhibitionClass");		
	}

	public function ListProvider(){
		return array(
				array("<tr>\n<td colspan='3'>\nSection 1: Flowers\n</td>\n</tr>"),
				array("<tr>\n<td colspan='3'>\nSection 2: Pot Plants\n</td>\n</tr>"),		
				array("<tr>\n<td colspan='3'>\nSection 3: Vegetables\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 1: Sweet Peas \(3 x one cultivars\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=344#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 2: Sweet Peas \(6 x two or more cultivars\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=345#form'><span>Edit</span></a>\n</td>\n</tr>"),				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 3: Pansies \(4 blooms\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=346#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 4: Pinks \(4 blooms\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=347#form'><span>Edit</span></a>\n</td>\n</tr>"),				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 5: Small Flowers \(6 blooms \(not to sxceed size of \?2 coin\)\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=348#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 6: Clematis \(one bloom\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=349#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 7: Clematis \(3 blooms\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=350#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 8: Roses \(3 blooms H.T. of one cultivar\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=351#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 9: Roses \(3 blooms H.T. of two or more cultivars\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=352#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 10: Roses \(3 stems floribunda type\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=353#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 11: Roses \(one specimen type\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=354#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 12: A vase of annuals \(not to exceed 9 stems\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=355#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 13: A vase of any other flowers \(not to exceed 9 stems\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=356#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 14: 3 stems Penstemons \(any variety\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=357#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 15: Flowering Shrub\(s\) \(vase of 3 stems\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=358#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 16: Dahlia \(vase of 1 stem\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=359#form'><span>Edit</span></a>\n</td>\n</tr>\n<tr>"),
			);
	}
	
}
?>