<?php
/*
 * File index.php
 * Created on 14 Aug 2009 by nick
 * email php@oldnicksoftware.co.uk
 *
 *
 * Copyright 2009 ONS
 *
 */
// if (!defined("__COMMON__"))
// 	include_once('common.php');
 error_log("Enter", E_USER_NOTICE);
//************************************************

 print '<?xml version="1.0" encoding="UTF-8"?>';
?>
 <!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>Geolocation API Demo</title>
 <meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport"/>
 <script>
 function successHandler(location) {
     var message = document.getElementById("message"), html = [];
     html.push("<img width='256' height='256' src='http://maps.google.com/maps/api/staticmap?center=", location.coords.latitude, ",", location.coords.longitude, "&markers=size:small|color:blue|", location.coords.latitude, ",", location.coords.longitude, "&zoom=14&size=256x256&sensor=false' />");
     html.push("<p>Longitude: ", location.coords.longitude, "</p>");
     html.push("<p>Latitude: ", location.coords.latitude, "</p>");
     html.push("<p>Accuracy: ", location.coords.accuracy, " meters</p>");
     message.innerHTML = html.join("");
 }
 function errorHandler(error) {
     alert('Attempt to get location failed: ' + error.message);
 }
 navigator.geolocation.getCurrentPosition(successHandler, errorHandler);
 </script>
 </head>
 <body>
 <div id="message">Location unknown</div>
 </body>
 </html>
<?php

//** Eclipse Debug Code **************************
if (str_replace("\\","/",__FILE__)==$_SERVER["SCRIPT_FILENAME"]){

}
//************************************************
error_log("Exit", E_USER_NOTICE);
?>