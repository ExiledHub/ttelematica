<?php

$host = "localhost";
$user = "teluser";
$pass = "password";
$db = "tel";

$link = mysql_connect($host, $user, $pass);
if (!$link) {
        die('NOt connected : ' . mysql_error());
}

$current_db = mysql_select_db($db, $link);

if (!$current_db) {
   die('Can\'t use the database : ' . mysql_error());
}
   
$sql = "SELECT * FROM proyects";
$result = mysql_query($sql, $link);
$array_user = array();
while($data = mysql_fetch_assoc($result)){
	    $array_user[] = $data;
}

echo json_encode($array_user);
?>