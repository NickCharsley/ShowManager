<?php
include_once('ons_common.php');

class ClassesPage extends pagetests
{
	public $tables=array("ExhibitionClass","ExhibitionSection","Defaults","Exhibition","Section","Class","DefaultExhibitionSection");
	
	function FileName(){
            return "Pages/Classes";
	}
	
	public function ListProvider(){
		return array(
				array("<tr>\n<td colspan='3'>\nSection 1: Flowers\n</td>\n</tr>"),
				array("<tr>\n<td colspan='3'>\nSection 2: Pot Plants\n</td>\n</tr>"),		
				array("<tr>\n<td colspan='3'>\nSection 3: Vegetables\n</td>\n</tr>"),
                    
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 1: Sweet Peas \(3 x one cultivar\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=1#form'><span>Edit</span></a>\n</td>\n</tr>"),
				array("<tr>\n<td>&nbsp;</td>\n<td>\nClass 2: Sweet Peas \(6 x two or more cultivars\)</td>\n<td>\n<a class='Button' href='\?action=edit&id=2#form'><span>Edit</span></a>\n</td>\n</tr>"),
			);
	}

    public function getDataObjectName() {
        return "ExhibitionClass";
    }
    
    public function getExpectedList() {
        return ($this->defaults==2 or $this->defaults==4)
               ?"Need to Set Default Show.<hr/>"
               :parent::getExpectedList();
    }

}
?>