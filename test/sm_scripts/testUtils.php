<?php

if (!defined("__ONS_COMMON__")) {
    include_once('ons_common.php');
}

class testUtils extends PHPUnit_Framework_TestCase {
    //put your code here
 
    function buttonProvider(){
        return array(
            "Home"=>        array("Home"	,"www.test.me"),
            "Shows"=>       array("Shows"	,"www.test.me/database/Exhibition.php"),
            "Sections"=>    array("Sections"	,"www.test.me/database/Exhibitionsection.php"),
            "Classes"=>     array("Classes"	,"www.test.me/database/Exhibitionclass.php"),
            "Prizes"=>      array("Prizes"	,"www.test.me/database/Prize.php"),
            "Trophies"=>    array("Trophies"	,"www.test.me/database/Trophy.php"),
            "Sponsorship"=> array("Sponsorship"	,"www.test.me/database/Sponsorship.php"),
            "Competitors"=> array("Competitors"	,"www.test.me/database/Exhibitionexhibitor.php"),
            "Results"=>     array("Results"	,"www.test.me/pages/results.php"),
            "Summary"=>     array("Summary"	,"www.test.me/pages/summary.php"),
        );
    }
        
    function testBuildButtonCSS() {
        global $root;
        global $button_css;
        unset($button_css); 

        $root="www.test.me";
        $this->assertEquals("<link href='www.test.me/css/style.css' media='all' rel='stylesheet' type='text/css' />\n",buildButtonCSS());
    }
    
    /**
     * @depends testBuildButtonCSS
     * @dataProvider buttonProvider
     * @param type $buttons
     */    
    function testButtons($title,$link){
        global $root;
        
        $root="www.test.me";
        $this->assertEquals("<a class='Button' href='$link'><span>$title</span></a>\n",AddButton($title,$link));
    }

    /**
     * @depends testButtons
     * @global string $root
     */
    function testBuildMenu(){
        global $root;
        global $button_css;
        $button_css=""; 
        $root="www.test.me";
        
        $exp="<link href='www.test.me/css/style.css' media='all' rel='stylesheet' type='text/css' />\n";
        $exp.="<table>\n<tr>\n";
        foreach($this->buttonProvider() as $row){
            $exp.="<td>\n<a class='Button' href='{$row[1]}'><span>{$row[0]}</span></a>\n</td>\n";
        }
        $exp.="</tr>\n</table>\n<hr/>\n";
        $this->assertEquals($exp,buildMenu());
    }
    
    /**
     * @depends testBuildMenu
     */
    function testBuildPageTitleNoShow(){
        global $root;
        global $button_css;
        $button_css=""; 
        $root="www.test.me";

        truncateTable("Defaults");
        dbRoot::clearCache("Defaults");        
        
        $print ="<head>\n";
        $print.="<title>Show Manager";
        if (isset($GLOBALS['TESTMODE'])) {
            $print.= ":".$GLOBALS['TESTMODE'];
        }
        $print.="</title>\n";

        $print.= "<link rel='stylesheet' href='www.test.me/jqwidgets/styles/jqx.base.css' type='text/css' />\n";
        $print.= "<script type='text/javascript' src='www.test.me/scripts/gettheme.js'></script>\n";
        $print.= "<script type='text/javascript' src='www.test.me/scripts/jquery-1.10.1.min.js'></script>\n";
        $print.= "<script type='text/javascript' src='www.test.me/jqwidgets/jqxcore.js'></script>\n";
        $print.= "<script type='text/javascript' src='www.test.me/jqwidgets/jqxtabs.js'></script>\n";
                
        $print.= "</head>\n";
        $data=buildPageTitle();
        $this->assertFalse($data[0]);
        $this->assertEquals($print,  $data[1]);        
    }
}
