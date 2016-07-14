<?php
include_once('ons_common.php');

abstract class ShowsPage extends pagetests
{
    public $tables=array("Exhibition","Defaults");

    function FileName(){
            return "Pages/Shows/Shows_".$this->defaults;
    }

    function getDataObjectName() {
        return "Exhibition";
    }

    public function ListProvider(){
            return  ($this->defaults==4)
                    ?parent::ListProvider()
                    :array(				
                            "Summer Show 2008"=>array("<tr>\n<td>\nSummer Show 2008</td>\n<td>\n<a class='Button' href='?action=edit&id=1'><span>Edit</span></a>\n</td>\n<td>\n<a class='Button' href='?action=default&id=1'><span>Set as Default</span></a>\n</td>\n</tr>"),
                            "Summer Show 2012"=>array("<tr>\n<td>\nSummer Show 2012</td>\n<td>\n<a class='Button' href='?action=edit&id=9'><span>Edit</span></a>\n</td>\n<td>\n".($this->defaults<>3?"<a class='Button' href='?action=default&id=9'><span>Set as Default</span></a>\n":"(Default)")."</td>\n</tr>"),
                    );
    }

    function getExpectedForm(){
        return "<a class='Button' href='?action=new#form'><span>New</span></a>\n"
            . "<br/><br/><hr/>\n"
            . "<form action=\"".$this->action."\" method=\"post\" name=\"doexhibition\" id=\"doexhibition\" target=\"_self\">\n"
            . "<div>\n"
            . "<input name=\"_qf__doexhibition\" type=\"hidden\" value=\"\" />\n"
            . "<input name=\"ID\" type=\"hidden\" value=\"\" />\n"
            . "<table border=\"0\">\n\n	<tr>\n"
            . "	\t<td style=\"white-space: nowrap; background-color: #CCCCCC;\" align=\"left\" valign=\"top\" colspan=\"2\"><b>Show</b></td>\n"
            . "	</tr>\n	<tr>\n"
            . "		<td align=\"right\" valign=\"top\"><span style=\"color: #ff0000\">*</span><b>Name</b></td>\n"
            . "		<td valign=\"top\" align=\"left\">	<input name=\"Name\" type=\"text\" /></td>\n"
            . "	</tr>\n	<tr>\n"
            . "	\t<td align=\"right\" valign=\"top\"><b></b></td>\n"
            . "	\t<td valign=\"top\" align=\"left\">	<input name=\"__submit__\" value=\"Submit\" type=\"submit\" /></td>\n"
            . "	</tr>\n	<tr>\n	\t<td></td>\n"
            . "	<td align=\"left\" valign=\"top\"><span style=\"font-size:80%; color:#ff0000;\">*</span><span style=\"font-size:80%;\"> denotes required field</span></td>\n"
            . "	</tr>\n</table>\n</div>\n</form><hr/>";
    }

    function getExpectedFooter() {
        return "\n"
            ."<form action=\"".$this->action."\" method=\"post\" name=\"upload_form\" id=\"upload_form\" enctype=\"multipart/form-data\">\n"
            ."<div>\n"
            ."<input name=\"MAX_FILE_SIZE\" type=\"hidden\" value=\"2097152\" />\n"
            ."<table border=\"0\">\n\n\t<tr>\n"
            ."\t\t<td align=\"right\" valign=\"top\"><span style=\"color: #ff0000\">*</span><b>File:</b></td>\n"
            ."\t\t<td valign=\"top\" align=\"left\">	<input name=\"filename\" type=\"file\" /></td>\n"
            ."\t</tr>\n\t<tr>\n"
            ."\t\t<td align=\"right\" valign=\"top\"><b></b></td>\n"
            ."\t\t<td valign=\"top\" align=\"left\">	<input name=\"btnUpload\" value=\"Upload\" type=\"submit\" /></td>\n"
            ."\t</tr>\n\t<tr>\n\t\t<td></td>\n"
            ."\t<td align=\"left\" valign=\"top\"><span style=\"font-size:80%; color:#ff0000;\">*</span><span style=\"font-size:80%;\"> denotes required field</span></td>\n"
            ."\t</tr>\n</table>\n</div>\n</form>";
    }
}
?>