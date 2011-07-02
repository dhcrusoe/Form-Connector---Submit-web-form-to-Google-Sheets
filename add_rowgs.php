<?php
error_reporting(E_ALL);
//please coment above line if you end this by a header location=redirect it will ruin your code
/*
Logon to your Google account and create a new spreadsheet.
 add  fields(collums name ) and save your spreadsheet giving a name . Choose meanfull name if you want to sort later
 construct the value array based on your requirment but make sure that in the created
 new spreadsheet you have same collums name ....otherwise will exit silently
 * 
 * s1 is default spreadsheet 1 name
 * email@email.com is in standard formating
 * password is in standard format
 * spreadsheet-title is lower-case
 * 
 */

include("google_spreadsheet.php");
$doc = new googlespreadsheet();
$doc->authenticate("email@email.com", "password");
$doc->settitleSpreadsheet("spreadsheet-title");
$doc->settitleWorksheet("s1");
$values["First_Name"]=stripslashes($_POST['fn']);
$values["Last_Name"]=stripslashes($_POST['ln']);
$values["Organization"]=stripslashes($_POST['org']);
$values["Entity"]=stripslashes($_POST['ent']);
$values["Location"]=stripslashes($_POST['loc']);
$my_data = array("First_Name" => $values["First_Name"], "Last_Name" => $values["Last_Name"], "Organization" => $values["Organization"], "Entity" => $values["Entity"], "Location" => $values["Location"]);
$doc->add_row($my_data);
header('Location: index.php?msg=ok');
?>