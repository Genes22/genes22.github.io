<?php
session_start();
require 'dbh.inc.php';
if (isset($_POST['hostel-Submit'])) {
	$Hstatus = clean($_POST['Status']);
	$Helectric = clean($_POST['Electric']);
	$Hwater = clean($_POST['Water']);
	$Hfence = clean($_POST['Fence']);
	$Hself = clean($_POST['Self']);
	$Hfood = clean($_POST['Food']);
	$Hcity = clean($_POST['City']);
	$Hdistrict = clean($_POST['District']);
	$Hlocality = clean($_POST['Locality']);
	$Hprice = clean($_POST['Price']);
	$Hcontact = clean($_POST['Contact']);
	$Hdiscription = clean($_POST['Discription']);

	if (isset($_FILES['imageHO'])){
      $file_name = $_FILES['imageHO']['name'];
      $file_size = $_FILES['imageHO']['size'];
      $file_tmp = $_FILES['imageHO']['tmp_name'];
      $file_type = $_FILES['imageHO']['type'];
      $path_parts = pathinfo($file_name);
      $file_ext = strtolower($path_parts['extension']);
      $filename = $path_parts['filename'];
      $imageName = $filename.'.'.$file_ext;
      if(empty($errors)==true) {
        //moving the image file to products directory
          move_uploaded_file($file_tmp,"../assets/img/hostel/".$imageName);
          $hostelpic = $imageName;
      }else{
          print_r($errors);
      }
      $hostelpic = $imageName;
    }
	//validations
	if (empty($Hstatus) || empty($Helectric) || empty($Hwater) || empty($Hfence) || empty($Hself) || empty($Hfood) || empty($Hcity) || empty($Hdistrict) || empty($Hlocality) || empty($Hprice) || empty($Hcontact) || empty($Hdiscription)){
		header("Location: ../upload.php?prop=hostel&error=emptyfield");
		exit();
	}elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
        header("Location: ../upload.php?prop=hostel&error=invalidvalue");
        exit();
	}elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../upload.php?prop=hostel&error=invalidcontact");
        exit();
	}elseif (strlen($Hcontact) > 13) {
        header("Location: ../upload.php?prop=hostel&error=invalidcontact");
        exit();
	}else {
		$Username = $_SESSION['username'];
		$host = $conn->prepare("INSERT INTO hostel (uName, Status, Electricity, Water, Fence, Self_Contained, Locality, Price, Contact, Food, City,District, Discription, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$hup = $host->execute(array($Username, $Hstatus, $Helectric, $Hwater, $Hfence, $Hself, $Hlocality, $Hprice,$Hcontact, $Hfood, $Hcity, $Hdistrict, $Hdiscription, $hostelpic));
		if ($hup) {
			header("Location: ../upload.php?prop=hostel&upload=success");
			exit();
		}
	}	
}else{
	header("Location: ../welcome-user.php");
	exit();
}