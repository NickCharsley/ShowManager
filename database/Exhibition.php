<?php
/**
 * Table Definition for exhibition
 */
require_once 'dbRoot.php';
require_once 'XML/Serializer.php';

class doExhibition extends dbRoot 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'exhibition';          // table name
    public $ID;                              // int(4)  primary_key not_null
    public $Name;                            // varchar(255)  unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    ###Formbuilder Code
	public $fb_formHeaderText="Show";
	public $fb_linkDisplayFields=array("Name");
	###End Formbuilder Code

    function EditLink(){
    	return AddButton("Edit","?action=edit&id=".$this->ID);
    }
    
    function DefaultLink(){
    	$defs=dbRoot::fromCache("Defaults",1);
    	if ($this->ID==$defs->ShowID)
    		return "(Default)";
    	else
    		return AddButton("Set as Default","?action=default&id=".$this->ID);
    }
    
    function printList(){
    	$list=clone($this);
    	$list->find();
    	print "<table>\n";
    	while ($list->fetch()){
    		print "<tr>\n";
    		print "<td>\n";
    		print $list->Name;
    		print "</td>\n";
    		print "<td>\n";
    		print $list->EditLink();
    		print "</td>\n";
    		print "<td>\n";
    		print $list->DefaultLink();
    		print "</td>\n";
    		print "</tr>\n";
    	}
    	print "</table>\n";    	 
    }    
    
    private function getChildren($child,&$ret,$Exhibitors=false){
        $doC=safe_dataobject_factory($child);
        $doC->ExhibitionID=$this->ID;
        $doC->find();
        while ($doC->fetch()){
            $doC->gatherExportDataObjects($ret,$Exhibitors);
        }        
    }
    
    function gatherExportDataObjects(&$ret,$Exhibitors=false){
        if (parent::gatherExportDataObjects($ret,$Exhibitors))
        {
            //Now Add Children            
            $this->getChildren("Prize", $ret, $Exhibitors);
            //ExhibitionClass
            $this->getChildren("ExhibitionClass", $ret, $Exhibitors);
            $this->getChildren("ExhibitionSection", $ret, $Exhibitors);
            //Not a direct Child!!! $this->getChildren("ExhibitionClassPrize", $ret, $Exhibitors);
            if ($Exhibitors) $this->getChildren("ExhibitionExhibitor", $ret, $Exhibitors);
            $this->getChildren("ExhibitionTrophyClass", $ret, $Exhibitors);
       }
    }
    
    //Static Functions.....
    static function Reset($ExhibitionID){

    }

    static function Export($ExhibitionID,$Exhibitors=false){
        dbRoot::CalculatePrizeFund();
        $do=dbRoot::fromCache("Exhibition",$ExhibitionID);
        $objects=array();
        $do->gatherExportDataObjects($objects,$Exhibitors);
        krumo($objects);
        
        $xml ="<showmanager name='Export Exhibition {$do->Name}'>\n";
        foreach($objects as $type=>$keys)
            foreach($keys as $key){
                $doC=dbRoot::fromCache($type, $key);
                $xml.=$doC->ExportInstance();
            }
        $xml.="</showmanager>\n";
        
        return $xml;
    }

    function footer(){             
        global $uploadedFile;
        $uploadForm = new HTML_QuickForm('upload_form', 'post');
        $this->uploadedFile =& $uploadForm->addElement('file', 'filename', 'File:');
        $uploadForm->addRule('filename', 'You must select a file', 'uploadedfile');
        $uploadForm->addElement('submit', 'btnUpload', 'Upload');
        if ($uploadForm->validate()) {
            $uploadForm->process(array($this,'process'), true);
        }
        else {
            $uploadForm->display();
        }
    }

    function process($values) {
        
        krumo($this->uploadedFile);
        if ($this->uploadedFile->isUploadedFile()) {
            $value=$this->uploadedFile->getValue();            
            dbRoot::Import($value['tmp_name']);
        }
        else {
            print "No file uploaded";
        }
    }
    
    static function Remove($ExhibitionID){
    }

    function ImportObject($object,$key,$Exhibitors=false){
        if (!isset($this->ID)){
            //if (dbRoot::importMap($this->__table,$key)==0){
                $this->Name=dbRoot::getObjectValue("Name", $object);
                if (!$this->find(true)){
                    //Need to save this as New
                    $this->insert();
                    $this->find(true);
                }
                dbRoot::addToCache($this);
                dbRoot::importMap($this->__table,$key,$this->ID);
            //}
        }
    }
}

        


//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	include_once("ons_common.php");

	dbRoot::showPage("Exhibition");
	
}
?>