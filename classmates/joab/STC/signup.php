<?php
		require_once("connection.php");


		if(isset($_POST['submit'])){
			$firstname = cleaner($_POST['firstname']);
			$lastname = cleaner($_POST['lastname']);
			$username = cleaner($_POST['username']);
			$email = cleaner($_POST['email']);
			$password = md5(cleaner($_POST['password']));

		if($firstname !="" and $lastname !="" and $username !="" and $email !="" and $password !="" ){

			$q="INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password` )
				VALUES('', '".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."')
			" ;
				if(mysqli_query($con, $q )){
					header("location:../index2.php") ;
				}else{
					echo $q ;
				}

		}else{
			echo "Please fill all the required box spaces..!";
		}	
	}




