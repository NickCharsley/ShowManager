<?php
/*
 * File results.php
 * Created on 20 Aug 2009 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2009 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('ons_common.php');
 error_log("Enter", E_USER_NOTICE);
//************************************************
include_once("ExhibitionClass.php");

class doResults extends doExhibitionClass {
	###Formbuilder Code
	public $fb_formHeaderText="Results";
	public $fb_userEditableFields=array("ID","__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID");
	public $fb_fieldLabels=array("__crossLink_exhibitionclassprize_ExhibitionClassID_PrizeID"=>"Prizes","ExhibitionID"=>"Show","ExhibitionSectionID"=>"Section","ClassID"=>"Class");
	public $fb_crossLinks=array(array("table"=>"exhibitionclassprize",
									  "fromField"=>"ExhibitionClassID",
									  "toField"=>"PrizeID"
									 )
							   );
	###End Formbuilder Code
	function EditLink(){
    	return AddButton("Class ".$this->ClassNumber,"?action=edit&id=".$this->ID."#form");
    }
    
    function PrintList(){
	PEARError($prize=DB_DataObject::factory("Prize"));
	$prize->find();
        $title="";
	while($prize->fetch()){
		$title.="<td>".$prize->Name."</td>";
	}
        $list=clone($this);
        
        PEARError($sec=DB_DataObject::factory("ExhibitionSection"));
	$sec->ExhibitionID=$list->ExhibitionID;
	$sec->orderBy("SectionNumber*1,SectionNumber");   
	$sec->find();
	print "<table border='1'>\n";
	while ($sec->fetch()){
            $sec->getLinks();
            print "<tr>\n";
                print "<td colspan='3'>\n";
                    print "Section ".$sec->SectionNumber.": " ;
                    print $sec->_SectionID->Name;
                print "</td>\n";
                print $title;
            print "</tr>\n";

            $list=clone($this);
            $list->ExhibitionSectionID=$sec->ID;
            $list->orderBy("ClassNumber*1,ClassNumber");
            $list->find();
            while ($list->fetch()){
                $list->getLinks();
                print "<tr>\n";
                    print "<td colspan='2' align='right'>\n";
                        print "&nbsp;".$list->EditLink();
                    print "</td>\n";
                    print "<td>\n";
                        print $list->_ClassID->Name;
                        if (strlen($list->_ClassID->Description)>0)
                            print " (".$list->_ClassID->Description.")";
                    print "</td>\n";
                    $results=array(1=>"-",2=>"-",3=>"-");
                    $doResults=safe_dataobject_factory("ExhibitionClassPrize");
                    $doResults->ExhibitionClassID=$list->ClassID;
                    $doResults->find();
                    while ($doResults->fetch()){
                        try {
                            $doResults->getLinks();
                            $results[$doResults->PrizeID]=$doResults->_ExhibitionExhibitorID->ExhibitorNumber;
                        } catch (Exception $e){}                        
                    }    
                    
                    foreach($results as $place){
                        print "<td>$place</td>";
                    }
                    print "</tr>\n";            
            }
        }
        print "</table>\n";
    }
    
}

if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");
        dbRoot::showPage("Results");		
		
/** /
				$results=array(1=>"-",2=>"-",3=>"-");
				PEARError($res=DB_DataObject::factory("ExhibitionClassPrize"));
				//DB_DataObject::debugLevel(5);
				$res->ExhibitionClassID=$list->ID;
				$res->orderBy("PrizeID");
				$res->find();
				while ($res->fetch()){
					$res->getLinks();
					$results[$res->PrizeID]=$res->_ExhibitionExhibitorID->ExhibitorNumber;
				}
		}
	}
	print "</table>\n";

	print "<hr/>";
/**/
}
?>