<?php

if (!defined("__ONS_COMMON__"))
    include_once('ons_common.php');
include_once 'results.php';

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-05-20 at 09:27:34.
 */
class doResultsTest extends pagetests {

	public $tables=array("Defaults","Exhibition","ExhibitionExhibitor","Section","ExhibitionSection","ExhibitionClass");
	
	function FileName(){
            return "ShowManager/Summer2013";
	}
	
	function getOutput(){            
            dbRoot::showPage("Results");		
	}

	public function ListProvider(){
            return array(
                array("<tr>\n<td colspan='3'>\nSection 1: Flowers</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 2: Pot Plants</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 3: Vegetables</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 4: Fruit</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 5: Floral Art</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 6: Homecraft</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 7: Photography</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 8: Art</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 9: Needlecraft/Hobbies</td>\n<td>First</td><td>Second</td><td>Third</td></tr>"),
                array("<tr>\n<td colspan='3'>\nSection 10: Children</td>\n<td>First</td><td>Second</td><td>Third</td></tr>\n"),
                
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=1#form'><span>Class 1</span></a>\n</td>\n<td>\nSweet Peas \(3 x one cultivar\)</td>\n<td>1</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=2#form'><span>Class 2</span></a>\n</td>\n<td>\nSweet Peas \(6 x two or more cultivars\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=3#form'><span>Class 3</span></a>\n</td>\n<td>\nPansies \(4 blooms\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=4#form'><span>Class 4</span></a>\n</td>\n<td>\nPinks \(4 blooms\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=5#form'><span>Class 5</span></a>\n</td>\n<td>\nSmall Flowers \(6 blooms \(not to exceed size of Â£2 coin\)\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=6#form'><span>Class 6</span></a>\n</td>\n<td>\nClematis \(1 bloom\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=7#form'><span>Class 7</span></a>\n</td>\n<td>\nClematis \(3 blooms\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=8#form'><span>Class 8</span></a>\n</td>\n<td>\nRoses \(3 blooms H.T. of one cultivar\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=9#form'><span>Class 9</span></a>\n</td>\n<td>\nRoses \(3 blooms H.T. of two or more cultivars\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=10#form'><span>Class 10</span></a>\n</td>\n<td>\nRoses \(3 stems floribunda type\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=11#form'><span>Class 11</span></a>\n</td>\n<td>\nRoses \(1 specimen type\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=12#form'><span>Class 12</span></a>\n</td>\n<td>\nA vase of annuals \(not to exceed 9 stems\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=13#form'><span>Class 13</span></a>\n</td>\n<td>\nA vase of any other flowers \(not to exceed 9 stems\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=14#form'><span>Class 14</span></a>\n</td>\n<td>\n3 Stems Penstemons \(any variety\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=15#form'><span>Class 15</span></a>\n</td>\n<td>\nFlowering Shrub\(s\) \(vase of 3 stems\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
                array("<tr>\n<td colspan='2' align='right'>\n&nbsp;<a class='Button' href='\?action=edit&id=16#form'><span>Class 16</span></a>\n</td>\n<td>\nDahlia \(vase of 1 stem\)</td>\n<td>-</td><td>-</td><td>-</td></tr>"),
//                array("£"),
                
            );
        }

}