<?php
include_once('ons_common.php');

class ClassesPageTest extends pagetests
{
	public $tables=array("ExhibitionClass","ExhibitionSection","Defaults","Exhibition","Section","Class","DefaultExhibitionSection");
	
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
				array("<tr>\n<td colspan='3'>\nSection 2: Pot Plants\n</td>\n</tr>"),		
				array("<tr>\n<td colspan='3'>\nSection 3: Vegetables\n</td>\n</tr>"),
                    
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 1: Sweet Peas \(3 x one cultivar\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=1#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 2: Sweet Peas \(6 x two or more cultivars\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=2#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 3: Pansies \(4 blooms\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=3#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 4: Pinks \(4 blooms\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=4#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 5: Small Flowers \(6 blooms \(not to exceed size of Â£2 coin\)\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=5#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 6: Clematis \(1 bloom\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=6#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 7: Clematis \(3 blooms\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=7#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 8: Roses \(3 blooms H.T. of one cultivar\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=8#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 9: Roses \(3 blooms H.T. of two or more cultivars\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=9#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 10: Roses \(3 stems floribunda type\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=10#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 11: Roses \(1 specimen type\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=11#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 12: A vase of annuals \(not to exceed 9 stems\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=12#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 13: A vase of any other flowers \(not to exceed 9 stems\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=13#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 14: 3 Stems Penstemons \(any variety\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=14#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 15: Flowering Shrub\(s\) \(vase of 3 stems\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=15#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 16: Dahlia \(vase of 1 stem\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=16#form'><span>Edit</span></a>\n</td>\n</tr>\n<tr>"),
			);
	}
	
}
?>