<?php
include_once('ons_common.php');

class SectionsPage extends pagetests
{
    public $tables=array("ExhibitionSection","Defaults","Exhibition","Section");

    function FileName(){
        return "Pages/Sections";
    }

    public function ListProvider(){
        return ($this->defaults==5)
               ?parent::ListProvider()
               :array(		
                    "Flowers"=>array("<tr>\n<td>\nSection 1: Flowers</td>\n<td>\n<a class='Button' href='?action=edit&id=35'><span>Edit</span></a>\n</td>\n</tr>"),
                    "PotPlants"=>array("<tr>\n<td>\nSection 2: Pot Plants</td>\n<td>\n<a class='Button' href='?action=edit&id=36'><span>Edit</span></a>\n</td>\n</tr>"),		
               );
    }

    public function getDataObjectName() {
        return "ExhibitionSection";
    }   
    
    public function getExpectedList() {
        return ($this->defaults==2 or $this->defaults==4)
               ?"Need to Set Default Show.<hr/>"
               :parent::getExpectedList();
    }
    
    public function getExpectedForm() {
        return ($this->defaults==2 or $this->defaults==4)
               ?parent::getExpectedForm()
               :"<a class='Button' href='?action=new#form'><span>New</span></a>\n"
               ."<br/><br/><hr/>\n"
               ."<form action=\"/usr/local/bin/phpunit\" method=\"post\" name=\"doexhibitionsection\" id=\"doexhibitionsection\" target=\"_self\">\n"
               ."<div>\n"
               ."<input name=\"_qf__doexhibitionsection\" type=\"hidden\" value=\"\" />\n"
               ."<input name=\"ID\" type=\"hidden\" value=\"\" />\n"
               ."<input name=\"ExhibitionID__subForm__displayed\" type=\"hidden\" value=\"\" id=\"ExhibitionID__subForm__displayed\" />\n"
               ."<input name=\"SectionID__subForm__displayed\" type=\"hidden\" value=\"\" id=\"SectionID__subForm__displayed\" />\n"
               ."<table border=\"0\">\n"
               ."\n"
               ."\t<tr>\n"
               ."\t\t<td style=\"white-space: nowrap; background-color: #CCCCCC;\" align=\"left\" valign=\"top\" colspan=\"2\"><b>Section</b></td>\n"
               ."\t</tr>\n"
               ."\t<tr>\n"
               ."\t\t<td align=\"right\" valign=\"top\"><b>Show</b></td>\n"
               .(
                    ($this->defaults==4)
                    ?"\t\t<td valign=\"top\" align=\"left\">\t&nbsp;\n"
                    :"\t\t<td valign=\"top\" align=\"left\">\tSummer Show 2012<input type=\"hidden\" name=\"ExhibitionID\" value=\"9\" id=\"ExhibitionID\" />\n"               
                ) 
               ."<script language=\"javascript\" type=\"text/javascript\">\n"
               ."function db_do_fb_ExhibitionID__subForm_display(sel) {\n"
               ."  div = document.getElementById(\"ExhibitionID__subForm__div\");\n"
               ."  if(sel.value == \"--New Value--\") {\n"
               ."    div.style.visibility = \"visible\";\n"
               ."    div.style.display = \"block\";\n"
               ."    div.style.overflow = \"auto\";\n"
               ."    document.getElementById(\"ExhibitionID__subForm__displayed\").value = \"1\";\n"
               ."  } else {\n"
               ."    div.style.display = \"none\";\n"
               ."    div.style.overflow = \"hidden\";\n"
               ."    div.style.visibility = \"hidden\";\n"
               ."    document.getElementById(\"ExhibitionID__subForm__displayed\").value = \"0\";\n"
               ."  }\n"
               ."}\n"
               ."</script>\n"
               ."<div id=\"ExhibitionID__subForm__div\">\n"
               ."\n"
               ."\n"
               ."<div>\n"
               ."<input name=\"_qf__doexhibition\" type=\"hidden\" value=\"\" />\n"
               ."<input name=\"ExhibitionID_Exhibition__ID\" type=\"hidden\" value=\"\" />\n"
               ."<input name=\"__DB_DataObject_FormBuilder_linkNewValue__ExhibitionID\" type=\"hidden\" value=\"Exhibition\" />\n"
               ."<table border=\"0\">\n"
               ."\n"
               ."	<tr>\n"
               ."		<td style=\"white-space: nowrap; background-color: #CCCCCC;\" align=\"left\" valign=\"top\" colspan=\"2\"><b>Show</b></td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td align=\"right\" valign=\"top\"><b>Name</b></td>\n"
               ."		<td valign=\"top\" align=\"left\">	&nbsp;<input type=\"hidden\" name=\"ExhibitionID_Exhibition__Name\" value=\"\" /></td>\n"
               ."	</tr>\n"
               ."</table>\n"
               ."</div>\n"
               ."\n"
               ."</div>\n"
               ."<script language=\"javascript\">\n"
               ."db_do_fb_ExhibitionID__subForm_display(document.getElementById(\"ExhibitionID\"));\n"
               ."</script>\n"
               ."</td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td align=\"right\" valign=\"top\"><span style=\"color: #ff0000\">*</span><b>Section Number</b></td>\n"
               ."		<td valign=\"top\" align=\"left\">	<input name=\"SectionNumber\" type=\"text\" /></td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td align=\"right\" valign=\"top\"><span style=\"color: #ff0000\">*</span><b>Section</b></td>\n"
               ."		<td valign=\"top\" align=\"left\">	<select name=\"SectionID\" onchange=\"db_do_fb_SectionID__subForm_display(this)\" id=\"SectionID\">\n"
               ."	<option value=\"1\">Flowers</option>\n"
               ."	<option value=\"2\">Pot Plants</option>\n"
               ."	<option value=\"3\">Vegetables</option>\n"
               ."	<option value=\"--New Value--\">--New Value--</option>\n"
               ."</select>\n"
               ."<script language=\"javascript\" type=\"text/javascript\">\n"
               ."function db_do_fb_SectionID__subForm_display(sel) {\n"
               ."  div = document.getElementById(\"SectionID__subForm__div\");\n"
               ."  if(sel.value == \"--New Value--\") {\n"
               ."    div.style.visibility = \"visible\";\n"
               ."    div.style.display = \"block\";\n"
               ."    div.style.overflow = \"auto\";\n"
               ."    document.getElementById(\"SectionID__subForm__displayed\").value = \"1\";\n"
               ."  } else {\n"
               ."    div.style.display = \"none\";\n"
               ."    div.style.overflow = \"hidden\";\n"
               ."    div.style.visibility = \"hidden\";\n"
               ."    document.getElementById(\"SectionID__subForm__displayed\").value = \"0\";\n"
               ."  }\n"
               ."}\n"
               ."</script>\n"
               ."<div id=\"SectionID__subForm__div\">\n"
               ."\n"
               ."\n"
               ."<div>\n"
               ."<input name=\"_qf__dosection\" type=\"hidden\" value=\"\" />\n"
               ."<input name=\"SectionID_Section__ID\" type=\"hidden\" value=\"\" />\n"
               ."<input name=\"__DB_DataObject_FormBuilder_linkNewValue__SectionID\" type=\"hidden\" value=\"Section\" />\n"
               ."<table border=\"0\">\n"
               ."\n"
               ."	<tr>\n"
               ."		<td style=\"white-space: nowrap; background-color: #CCCCCC;\" align=\"left\" valign=\"top\" colspan=\"2\"><b>Section</b></td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td align=\"right\" valign=\"top\"><span style=\"color: #ff0000\">*</span><b>Name</b></td>\n"
               ."		<td valign=\"top\" align=\"left\">	<input name=\"SectionID_Section__Name\" type=\"text\" /></td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td align=\"right\" valign=\"top\"><b>Description</b></td>\n"
               ."		<td valign=\"top\" align=\"left\">	<input name=\"SectionID_Section__Description\" type=\"text\" /></td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td></td>\n"
               ."	<td align=\"left\" valign=\"top\"><span style=\"font-size:80%; color:#ff0000;\">*</span><span style=\"font-size:80%;\"> denotes required field</span></td>\n"
               ."	</tr>\n"
               ."</table>\n"
               ."</div>\n"
               ."\n"
               ."</div>\n"
               ."<script language=\"javascript\">\n"
               ."db_do_fb_SectionID__subForm_display(document.getElementById(\"SectionID\"));\n"
               ."</script>\n"
               ."</td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td align=\"right\" valign=\"top\"><b></b></td>\n"
               ."		<td valign=\"top\" align=\"left\">	<input name=\"__submit__\" value=\"Submit\" type=\"submit\" /></td>\n"
               ."	</tr>\n"
               ."	<tr>\n"
               ."		<td></td>\n"
               ."	<td align=\"left\" valign=\"top\"><span style=\"font-size:80%; color:#ff0000;\">*</span><span style=\"font-size:80%;\"> denotes required field</span></td>\n"
               ."	</tr>\n"
               ."</table>\n"
               ."</div>\n"
               ."</form><hr/>";
    }
}
?>