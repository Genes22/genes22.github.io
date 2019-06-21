<?php
if(isset($_POST['login'])){
	$username = $_POST ['username'];
	$password = $_POST ['password'];

	If  (!empty($username) || !empty($password) ){
		// create connection 
		$conn = new PDO('mysql:host=127.0.0.1; dbname=onoa;', 'root', '');
		$log = $conn->prepare("SELECT * FROM `users` WHERE `username`=?");
		if($log->execute(array($username))){
			$row = $log->fetch(PDO::FETCH_ASSOC);
			if ($row['password'] == $password) {
				echo 'logged in';
			}else{
				echo 'wrong password please try again';
			}

		} else {
			echo 'user name not available';
		}
	}
}

?>