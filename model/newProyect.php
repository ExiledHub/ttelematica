<?php

$host = "localhost"
$user = "teluser"
$pass = "password"
$db = "tel"
$table = "proyects"

$link = mysql_connect($host, $user, $pass);
if (!$link) {
	die('NOt connected : ' . mysql_error());
}

$current_db = mysql_select_db($db, $link);

if (!$current_db) {
   die('Can\'t use the database : ' . mysql_error());
}

$sql = 'INSERT INTO $table (pname, desc, idate, edate)
VALUES ("' . $pname . '", "' . $desc . '", "' . $idate . '", "' . $edate . '")';

$retval = mysql_query($sql, $link);

if(!$retval){
	die('Couldn\'t enter data : ' . mysql_error());
}
?>