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
		header("Location: ../Uploadhouse.php?error=emptyfield");
		exit();
	}elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
	    header("Location: ../Uploadhouse.php?error=invalidvalue");
	    exit();
	}elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../Uploadhouse.php?error=invalidcontact");
        exit();
	}elseif (strlen($Hcontact) > 13 || strlen($Hcontact) < 10) {
        header("Location: ../Uploadhouse.php?error=invalidcontact");
        exit();
	}else {
	$sql = "INSERT INTO houses (uName, Status, Bedrooms, Bathrooms, Garages, Kitchens, Sittingrooms, City, District, Location, Price, Contact, Discription,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../Uploadhouse.php?error=sqlerror");
		exit();
	}
	else {
		$Username = $_SESSION['username'];
		mysqli_stmt_bind_param($stmt, ssiiiiisssiss,$Username, $Hstatus, $Hbedrooms, $Hbathrooms, $Hgarages, $Hkitchens, $Hsittingrooms, $Hcity, $Hdistrict, $Hlocation, $Hprice, $Hcontact, $Hdiscription, $housepic);
		mysqli_stmt_execute($stmt);
		header("Location: ../Uploadhouse.php?upload=success");
		exit();
	}

}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: ../welcome.php");
	exit();
}