<?php
include_once('ons_common.php');
error_log("Enter ".__FILE__);
abstract class pagetests extends ONS_Tests_DatabaseTestCase
{
        protected $defaults;
        protected $action;
        
        abstract function getDataObjectName();        

        function setUp() {
            global $root;
            global $button_css;
            
            $this->action="/home/vagrant/.composer/vendor/bin/phpunit";
                        
            parent::setUp();
            
            $button_css=""; 
            $root="www.test.me";
        
        }
        
        function getOutput() {
            dbRoot::showPage($this->getDataObjectName());	
	}
        
	public function ListProvider() {
            return array(array(""));
	}

        function buttonList() {
            return array(
                "Home"=>        array("Home"        ,"www.test.me"),
                "Shows"=>       array("Shows"       ,"www.test.me/database/Exhibition.php"),
                "Sections"=>    array("Sections"    ,"www.test.me/database/Exhibitionsection.php"),
                "Classes"=>     array("Classes"     ,"www.test.me/database/Exhibitionclass.php"),
                "Prizes"=>      array("Prizes"      ,"www.test.me/database/Prize.php"),
                "Trophies"=>    array("Trophies"    ,"www.test.me/database/Trophy.php"),
                "Sponsorship"=> array("Sponsorship" ,"www.test.me/database/Sponsorship.php"),
                "Competitors"=> array("Competitors" ,"www.test.me/database/Exhibitionexhibitor.php"),
                "Results"=>     array("Results"     ,"www.test.me/pages/results.php"),
                "Summary"=>     array("Summary"     ,"www.test.me/pages/summary.php"),
            );
        }
                          
        function getExpectedPageTitle() {
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
                        
            if ($this->defaults>1) {
                $print.= "<div align='center'>\n<h1>\nBHS</h1>\n";
                if ($this->defaults==3 or $this->defaults==5) {
                    $print.= "<h2>\nSummer Show 2012</h2>\n";
                }
                $print.= "</div>\n";
                
                $print.="<link href='www.test.me/css/style.css' media='all' rel='stylesheet' type='text/css' />\n";
                $print.="<table>\n<tr>\n";
                foreach($this->buttonList() as $row) {
                    $print.="<td>\n<a class='Button' href='{$row[1]}'><span>{$row[0]}</span></a>\n</td>\n";
                }
                $print.="</tr>\n</table>\n<hr/>\n";
            }
            
            return $print;
        }

        function getExpectedList() {
            $data=$this->ListProvider();
            $ret="<table>\n";
            foreach ($data as $row) {
                if ($row[0]<>"") {
                    $ret.=$row[0]."\n";
                }
            }
            $ret.="</table>\n";
            error_log($ret);
            return $ret;
        }
        
        function getExpectedForm() {
            return "";
        }

        function getExpectedFooter() {
            return "";
        }
        
        function getExpectedPage() {
            $data=$this->getExpectedPageTitle();
            if ($this->defaults>1) {
                $data.="<a class='Button' href='?action=new#form'><span>New</span></a>\n";
                $data.=$this->getExpectedList();
                $data.=$this->getExpectedForm();
                $data.=$this->getExpectedFooter();
            }
            return $data;
        }
        
        abstract function validSetup();
        
/**/
}
error_log("Exit ".__FILE__);
?>