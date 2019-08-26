<?php

$servername = "localhost";
$dBUsername = "genes";
$dBPassword = "geek";
$dBName = "homesitesystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysql_connect_error());
}

function clean($data){
	$a = stripcslashes(strip_tags($data));
	$b = htmlentities($a);
	$c = htmlspecialchars($b);
	return $c;
}