<?php
session_start();
require 'dbh.inc.php';
if (isset($_POST['godown-Submit'])) {
	$Hstatus = clean($_POST['Status']);
	$Hlocation = clean($_POST['Locality']);
	$Hprice = clean($_POST['Price']);
	$Hcontact = clean($_POST['Contact']);
	$Hcity = clean($_POST['City']);
	$Hdistrict = clean($_POST['District']);
    $Harea = clean($_POST['Area']);
	$Hdiscription = clean($_POST['Discription']);

	if (isset($_FILES['imageG'])){
      $file_name = $_FILES['imageG']['name'];
      $file_size = $_FILES['imageG']['size'];
      $file_tmp = $_FILES['imageG']['tmp_name'];
      $file_type = $_FILES['imageG']['type'];
      $path_parts = pathinfo($file_name);
      $file_ext = strtolower($path_parts['extension']);
      $filename = $path_parts['filename'];
      $imageName = $filename.'.'.$file_ext;
      if(empty($errors)==true) {
        //moving the image file to products directory
          move_uploaded_file($file_tmp,"../assets/img/godown/".$imageName);
          $godownpic = $imageName;
      }else{
          print_r($errors);
      }
      $godownpic = $imageName;
    }
	
	if (empty($Hlocation) || empty($Hprice) || empty($Hcontact) || empty($Harea) || empty($Hdiscription)) {
		header("Location: ../upload.php?prop=godown&error=emptyfield");
		exit();
	}elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../upload.php?prop=godown&error=invalidcontact");
        exit();
	}elseif (strlen($Hcontact) > 13) {
        header("Location: ../upload.php?prop=godown&error=invalidcontact");
        exit();
	}elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
        header("Location: ../upload.php?prop=godown&error=invalidprice");
        exit();
	}elseif (!preg_match("/^[0-9]*$/", $Harea)) {
        header("Location: ../upload.php?prop=godown&error=invalidinputs");
        exit();
	}else {
		$Username = $_SESSION['username'];
		$up = $conn->prepare("INSERT INTO godown (uName, Status, Location, Price, Contact, City, District, Area,  Discription, image) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$upg = $up->execute(array($Username, $Hstatus, $Hlocation, $Hprice, $Hcontact, $Hcity, $Hdistrict, $Harea, $Hdiscription, $godownpic));
		if ($upg) {
			header("Location: ../upload.php?prop=godown&upload=success");
			exit();
		}
	}
}else {
	header("Location: ../welcome-user.php");
	exit();
}