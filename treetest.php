<?php
/*
 * File treetest.php
 * Created on 27 Aug 2009 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2009 ONS
 *
 */
 if (!defined("__COMMON__"))
 	include_once('common.php');
 trigger_error("Enter", E_USER_NOTICE);
//************************************************


require_once 'HTML/TreeMenu.php';

$menu_styles      = new HTML_TreeNode(array('text'=>'Styles'));
$menu_pays        = new HTML_TreeNode(array('text'=>'Countries'));
$menu_restaurants = new HTML_TreeNode(array('text'=>'Restaurants'));
$menu_plats       = new HTML_TreeNode(array('text'=>'Menus'));

for ($i = 1; $i < 10; $i) {
    $menu_styles->addItem(new HTML_TreeNode(array('icon'=>'Image '.($i +0))));
    $menu_pays->addItem(new HTML_TreeNode(array('icon'=>'Image '.($i+10))));
    $menu_restaurants->addItem(new HTML_TreeNode(array('icon'=>'Image '.($i+20))));
    $menu_plats->addItem(new HTML_TreeNode(array('icon'=>'Image '.($i+30))));
}

$menu  = new HTML_TreeMenu();
$menu->addItem($menu_styles);
$menu->addItem($menu_pays);
$menu->addItem($menu_restaurants);
$menu->addItem($menu_plats);

// Chose a generator. You can generate DHTML or a Listbox
$tree = new HTML_TreeMenu_ListBox($menu);

echo $tree->toHTML();


//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){
	print("<h1 align='center'>".$_SERVER["SCRIPT_FILENAME"]."</h1>");
	phpinfo();
}
//************************************************
trigger_error("Exit", E_USER_NOTICE);
?>
