<?php 
session_start();
unset($_SESSION['userID']);

if(session_destroy()){
		echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success!</strong>  Logged out </div> ";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>logged out</title>
</head>
<body>
<p>Go home</p>
<button><a href="index.php">Home</a></button>
</body>
</html>