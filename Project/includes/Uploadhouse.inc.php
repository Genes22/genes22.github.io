<?php
session_start();
require 'dbh.inc.php';
if(isset($_POST['house-Submit'])){
	$Hstatus = clean($_POST['Status']);
	$Hbedrooms = clean($_POST['Bedrooms']);
	$Hbathrooms = clean($_POST['Bathrooms']);
	$Hgarages = clean($_POST['Garages']);
	$Hkitchens = clean($_POST['Kitchens']);
	$Hsittingrooms = clean($_POST['Sittingrooms']);
	$Hcity = clean($_POST['City']);
	$Hdistrict = clean($_POST['District']);
	$Hlocation = clean($_POST['Locality']);
	$Hprice = clean($_POST['Price']);
	$Hcontact = clean($_POST['Contact']);
	$Hdiscription = clean($_POST['Discription']);
	
	if (isset($_FILES['imageh'])){
      $file_name = $_FILES['imageh']['name'];
      $file_size = $_FILES['imageh']['size'];
      $file_tmp = $_FILES['imageh']['tmp_name'];
      $file_type = $_FILES['imageh']['type'];
      $path_parts = pathinfo($file_name);
      $file_ext = strtolower($path_parts['extension']);
      $filename = $path_parts['filename'];
      $imageName = $filename.'.'.$file_ext;
      //Short version of the above 3 lines of code
      $file_ext = strtolower(end(explode('.',$_FILES['ProductImage']['name'])));
      if(empty($errors)==true) {
        //moving the image file to products directory
          move_uploaded_file($file_tmp,"../assets/img/houses/".$imageName);
          $housepic = $imageName;
      }else{
          print_r($errors);
      }
      $housepic = $imageName;
    }

	if (empty($Hstatus) || empty($Hbedrooms) || empty($Hbathrooms) || empty($Hgarages) || empty($Hkitchens) || empty($Hsittingrooms) || empty($Hcity) || empty($Hdistrict) || empty($Hlocation) || empty($Hprice) || empty($Hcontact) || empty($Hdiscription)) {
		header("Location: ../uploaddet.php?prop=house&error=emptyfield");
		exit();
	}elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
	    header("Location: ../uploaddet.php?prop=house&error=invalidvalue");
	    exit();
	}elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../uploaddet.php?prop=house&error=invalidcontact");
        exit();
	}elseif (strlen($Hcontact) > 13 || strlen($Hcontact) < 10) {
        header("Location: ../uploaddet.php?prop=house&error=invalidcontact");
        exit();
	}else {
		$up = $conn->prepare("INSERT INTO houses (uName, Status, Bedrooms, Bathrooms, Garages, Kitchens, Sittingrooms, City, District, Location, Price, Contact, Discription,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$Username = $_SESSION['username'];
		$upload = $up->execute(array($Username, $Hstatus, $Hbedrooms, $Hbathrooms, $Hgarages, $Hkitchens, $Hsittingrooms, $Hcity, $Hdistrict, $Hlocation, $Hprice, $Hcontact, $Hdiscription, $housepic));
		if (!$upload) {
			header("Location: ../uploaddet.php?prop=house&upload=success");
			exit();	
		}else{
			header("Location: ../uploaddet.php?prop=house&error=sqlerror");
			exit();
		}
	}
}else {
	header("Location: ../welcome.php");
	exit();
}