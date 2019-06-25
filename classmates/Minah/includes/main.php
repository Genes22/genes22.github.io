<?php 
	$conn = new PDO('mysql:host=127.0.0.1; dbname=onoa;', 'root', '');

	function cleaner($data){
		$one = strip_tags($data);
		$two = stripcslashes($one);
		$three = htmlentities($two);
		$last = htmlspecialchars($three);
		return $last;
	}
?>
