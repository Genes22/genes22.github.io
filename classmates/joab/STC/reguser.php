<?php 
require 'includes/db.php';

if (isset($_POST['register'])) {
	
	$name1 = $_POST['fname']; 
	$name2 = $_POST['lname'];
	$email = $_POST['email'];
	$passw  = $_POST['psw'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];
	//$region = $_POST['nn'];*/
	$gender = $_POST['gender'];
	$company = $_POST['Company'];
	$business = $_POST['Business'];
	$subject = $_POST['subject'];
	
	if(!empty($name1) && !empty($name2) && !empty($email) && !empty($passw) && !empty($phone) && !empty($country) && !empty($gender) && !empty($company) && !empty($business) && !empty($subject)){
		$pass = $conn->prepare("INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `phone_number`, `country`, `gender`, `company_name`, `business_name`, `subject`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		if($pass->execute(array($name1, $name2, $email, $passw, $phone, $country, $gender,$company, $business, $subject))){
			header('location:logform.html');
		}else{
			echo "Failed to register the user to the database";
		}
	}else{
	 	echo "empty variables";   
    }
}
?>