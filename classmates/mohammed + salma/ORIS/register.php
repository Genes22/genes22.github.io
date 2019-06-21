<?php 
require 'includes/db.php';

if (isset($_POST['register'])) {
	
	$chuono = $_POST['regno']; 
	$pass = $_POST['password'];
	$pass2 = $_POST['verifyPassword'];

	if ($pass !== $pass2) {
		$error = "Sorry passwords do not match";
	}else{
		$enqpass = md5($pass);
	    $reg = $conn->prepare("INSERT INTO `student_details` (`regNo`, `password`) VALUES (?,?)");
        if($reg->execute(array($chuono,$enqpass))){
			header('location: index.php');
	   } else{
		echo "failed to register";
	}
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="style.css">
	<style>
     body{
    background-color:grey;
	}
</style>
</head>
<body>
	<div class="wrap">
		<?php 
			if (isset($error)) {
				echo "<div class='alert alert-success' role='alert'>".$error."!</div>";
			}
		 ?>
		<h2>Sign up Here</h2>
		<form method="POST" action="register.php">
			<input type="text" name="regno" placeholder="Registration number" required="required">
			<input type="Password" name="password" placeholder="Password" required="required">
			<input type="Password" name="verifyPassword" placeholder="verify Password" required="required">
		    <input type="submit" name="register" value="Submit">
		</form>
	</div>
</body>
</html>
