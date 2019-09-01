<?php
session_start();
require 'dbh.inc.php';

if (isset($_POST['land-Submit'])) {
	$Hstatus = clean($_POST['Status']);
	$Hlocation = clean($_POST['Locality']);
	$Hprice = clean($_POST['Price']);
	$Hcontact = clean($_POST['Contact']);
	$Hcity = clean($_POST['City']);
	$Hdistrict = clean($_POST['District']);
    $Harea = clean($_POST['Area']);
	$Hdiscription = clean($_POST['Discription']);

	if (isset($_FILES['imageL'])){
      $file_name = $_FILES['imageL']['name'];
      $file_size = $_FILES['imageL']['size'];
      $file_tmp = $_FILES['imageL']['tmp_name'];
      $file_type = $_FILES['imageL']['type'];
      $path_parts = pathinfo($file_name);
      $file_ext = strtolower($path_parts['extension']);
      $filename = $path_parts['filename'];
      $imageName = $filename.'.'.$file_ext;
      if(empty($errors)==true) {
        //moving the image file to products directory
          move_uploaded_file($file_tmp,"../assets/img/land/".$imageName);
          $landpic = $imageName;
      }else{
          print_r($errors);
      }
      $landpic = $imageName;
    }
	if (empty($Hlocation) || empty($Hprice) || empty($Hcontact) || empty($Harea) || empty($Hdiscription)) {
		header("Location: ../upload.php?prop=land&prop=land&&error=emptyfield");
		exit();
	}elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../upload.php?prop=land&prop=land&&error=invalidcontact");
        exit();
	}elseif (strlen($Hcontact) > 13 || strlen($Hcontact) < 10) {
        header("Location: ../upload.php?prop=land&prop=land&&error=invalidcontact");
        exit();
	}elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
        header("Location: ../upload.php?prop=land&prop=land&&error=invalidprice");
        exit();
	}elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Harea)) {
        header("Location: ../upload.php?prop=land&prop=land&&error=invalidinputs");
        exit();
	}else{
		$Username = $_SESSION['username'];
		$upland = $conn->prepare("INSERT INTO land (uName, Status, Location, Price, Contact, City, District, Area, Discription, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$up = $upland->execute(array($Username , $Hstatus, $Hlocation, $Hprice, $Hcontact, $Hcity, $Hdistrict, $Harea, $Hdiscription, $landpic));
		if ($up) {
			header("Location: ../upload.php?prop=land&upload=success");
			exit();
		}
	}
}else {
	header("Location: ../welcome-user.php");
	exit();
}