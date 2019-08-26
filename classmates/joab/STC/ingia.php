<?php 	
session_start() ;
	require 'includes/db.php';

	if(isset($_POST['login'])){
		$email = $_POST['uname'] ;
		$pass = $_POST['psw'] ;

		$q= $conn->prepare("SELECT * FROM `user` where `email`=? and `password`=?");
		$q->execute(array($email, $pass));
		if($q->rowCount() > 0){
			$_SESSION['email'] = $email;
			header("location:homepage.html");
		}else{
			echo 'failed to login' ;
		}
	}
?>