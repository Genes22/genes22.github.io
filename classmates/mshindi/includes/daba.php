<?php 

$db = new PDO('mysql:host=127.0.0.1;dbname=onlinebus_booking', 'root', '');

function cleaner($data){
	$data1 = htmlentities($data);
	$data2 = htmlspecialchars($data1);
	$data3 = strip_tags($data2);
	$data4 = stripcslashes($data3);
	$cleaned = stripslashes($data4);
	return $cleaned;
}

?>