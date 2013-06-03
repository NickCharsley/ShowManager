<?php
include_once('ons_common.php');

class SponsorshipPageTest extends pagetests
{
	public $tables=array("Sponsorship","Defaults","Exhibition");
	
	function FileName(){
            return "ShowManager/Summer2013";
	}
	
	function getOutput(){            
            dbRoot::showPage("Sponsorship");		
	}

	public function ListProvider(){
            return array(
                array("<tr>\n<td>\nSweet Peas 1st</td>\n<td>\nUnwins Voucher</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=1'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nSweet Peas 2nd</td>\n<td>\nUnwins Voucher</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=2'><span>Edit</span></a>\n</td>\n</tr>"),               
                array("<tr>\n<td>\nRoses 1st</td>\n<td>\n&pound;5 \(Bob Smith\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=3'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nRoses 2nd</td>\n<td>\n&pound;3 \(Bob Smith\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=4'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nRoses 3rd</td>\n<td>\n&pound;2 \(Bob Smith\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=5'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nVase of Flowers 1st</td>\n<td>\n&pound;5 \(Mrs Gray\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=6'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nVase of Flowers 2nd</td>\n<td>\n&pound;3 \(Mrs Gray\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=7'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nVase of Flowers 3rd</td>\n<td>\n&pound;2 \(Mrs Gray\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=8'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nPatio Pot 1st</td>\n<td>\n&pound;7 Voucher \(Baldock Hardware\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=9'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nPatio Pot 2nd</td>\n<td>\n&pound;3 Voucher \(Baldock Hardware\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=10'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFlowering Plant 1st</td>\n<td>\n&pound;10 Voucher \(Bickerdike Garden Centre\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=11'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFlowering Plant 2nd</td>\n<td>\n&pound;6 Voucher \(Bickerdike Garden Centre\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=12'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nHanging Basket 1st</td>\n<td>\n&pound;8 Voucher \(C Keeble\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=13'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nHanging Basket 2nd</td>\n<td>\n&pound;6 Voucher \(C Keeble\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=14'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nHanging Basket 3rd</td>\n<td>\n&pound;4 Voucher \(C Keeble\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=15'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nOther Fruit 1st</td>\n<td>\n&pound;5 \(Mr M Camp\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=16'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nOther Fruit 2nd</td>\n<td>\n&pound;3 \(Mr M Camp\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=17'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nOther Fruit 3rd</td>\n<td>\n&pound;2 \(Mr M Camp\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=18'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFireworks 1st</td>\n<td>\n&pound;6 Voucher \(Ruby Tuesday\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=19'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFireworks 2nd</td>\n<td>\n&pound;4 Voucher \(Ruby Tuesday\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=20'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFireworks 3rd</td>\n<td>\n&pound;3 Voucher \(Ruby Tuesday\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=21'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFruit Cake 1st</td>\n<td>\n&pound;5 \(Days of Ashwell\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=22'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFruit Cake 2nd</td>\n<td>\n&pound;3 \(Days of Ashwell\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=23'><span>Edit</span></a>\n</td>\n</tr>"),
                array("<tr>\n<td>\nFruit Cake 3rd</td>\n<td>\n&pound;2 \(Days of Ashwell\)</td>\n<td>\n<a class='Button' href='\?type=sponsorship&action=edit&id=24'><span>Edit</span></a>\n</td>\n</tr>"),
            );
	}
	
}
?>