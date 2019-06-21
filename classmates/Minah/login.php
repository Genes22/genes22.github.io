<?php

$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];

If  (!empty($username) || !empty($email) ||  !empty($password) )
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "onoa";
	
	// create connection 
	$conn = new myql ($host , $dbusername , $dbpassword , $dbname );
	
	if ( mysql_connect_error () )
		die ('Connect  Error  ('. mysql_connect_error () .') '. ( mysql_connect_error () .')' ) 
	else {
		$SELECT = "SELECT email From login Where email=? Limit1";
		$INSERT = "INSERT Into login (username, email, password ) values (?, ?, ?) "
		
		//prepare statement
		$stmt = $conn-> prepare($SELECT);
		$stmt -> bind_param("s" , $email)
		$stmt -> execute (); 
		$stmt -> bind_result ($email);
		$stmt -> store_result();
		$rnum = $stmt -> num_rows ;

if ( $rnum==0) 
{
	$stmt -> close();
	
	$stmt = $conn->prepare($INSERT) ;
	$stmt -> bind_param ("ssi", $username, $email, $password );
    $stmt -> execute ();
	 
	 echo  "New recode inserted sucessfully"
	
}
	else {
		echo "Someone already has registered using this email";
	}
	
	$stmt -> close();
	$conn -> close();
	}
	
	
}
else {
	echo "All fields are required";
	die();
}






























?>