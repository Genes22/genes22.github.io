<?php
$conn = new PDO('mysql:host=127.0.0.1;dbname=homesitesystem', 'root', '');

if (!$conn) {
	die("Failed to connect to the database");
}
function clean($data){
	$a = stripcslashes(strip_tags($data));
	$b = htmlentities($a);
	$c = htmlspecialchars($b);
	return $c;
}