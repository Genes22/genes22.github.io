<?php
if(isset($_POST['register'])){
	$username = $_POST ['Username'];
	$email = $_POST ['Email'];
	$password = $_POST ['Password'];

	If  (!empty($username) || !empty($email) ||  !empty($password) ){
		// create connection 
		$conn = new PDO('mysql:host=127.0.0.1; dbname=onoa;', 'root', '');

		$SELECT = "SELECT email From Users Where email=? Limit1";
		$INSERT = "INSERT INTO users(username, email, password ) VALUES(?, ?, ?)";
		
		//prepare statement
		$stmt = $conn-> prepare($SELECT);
		$stmt-> execute(array($email)); 
		$rnum = $stmt->rowCount();
		if ( $rnum==0) {
			$stmt = $conn->prepare($INSERT);
		    if($stmt->execute(array($username, $email, $password))){
		    	 echo  "New recode inserted sucessfully";	
		    }
		}else {
				echo "Someone already has registered using this email";
		}
	} else {
			echo "All fields are required";
		}
	}
?>