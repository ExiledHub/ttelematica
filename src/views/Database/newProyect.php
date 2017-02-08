<?php

$host = "localhost";
$user = "teluser";
$pass = "password";
$db = "tel";

$link = mysql_connect($host, $user, $pass);
if (!$link) {
	die('Not connected : ' . mysql_error());
}

$current_db = mysql_select_db($db, $link);

if (!$current_db) {
   die('Can\'t use the database : ' . mysql_error());
}

$pname = $_POST['pname'];
$pdesc =  $_POST['desc'];
$idate = $_POST['idate'];
$edate = $_POST['edate'];

$sql = 'INSERT INTO proyects (pname, pdesc, idate, edate)
VALUES ("' . $pname . '", "' . $pdesc . '", "' . $idate . '", "' . $edate . '")';

$retval = mysql_query($sql, $link);

if(!$retval){
	die('Couldn\'t enter data : ' . mysql_error());
}
?>