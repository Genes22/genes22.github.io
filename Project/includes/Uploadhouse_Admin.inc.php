<?php
if (isset($_POST['house-Submit'])) {
	
	require 'dbh.inc.php';
	
	$Hstatus = $_POST['Status'];
	$Hbedrooms = $_POST['Bedrooms'];
	$Hbathrooms = $_POST['Bathrooms'];
	$Hgarages = $_POST['Garages'];
	$Hkitchens = $_POST['Kitchens'];
	$Hsittingrooms = $_POST['Sittingrooms'];
	$Hcity = $_POST['City'];
	$Hdistrict = $_POST['District'];
	$Hlocation = $_POST['Locality'];
	$Hprice = $_POST['Price'];
	$Hcontact = $_POST['Contact'];
	$Hdiscription = $_POST['Discription'];
	
	if (empty($Hstatus) || empty($Hbedrooms) || empty($Hbathrooms) || empty($Hgarages) || empty($Hkitchens) || empty($Hsittingrooms) || empty($Hcity) || empty($Hdistrict) || empty($Hlocation) || empty($Hprice) || empty($Hcontact) || empty($Hdiscription)) {
		header("Location: ../Uploadhouse_Admin.php?error=emptyfield");
		exit();
	}
    elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
        header("Location: ../Uploadhouse_Admin.php?error=invalidvalue");
        exit();
}
    elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../Uploadhouse_Admin.php?error=invalidcontact");
        exit();
}
    elseif (strlen($Hcontact) > 13) {
        header("Location: ../Uploadhouse_Admin.php?error=invalidcontact");
        exit();
}

else {
	$sql = "INSERT INTO houses (uName, Status, Bedrooms, Bathrooms, Garages, Kitchens, Sittingrooms, City, District, Location, Price, Contact, Discription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../Uploadhouse_Admin.php?error=sqlerror");
		exit();
	}
	else {
		session_start();
		$Username = $_SESSION['username'];

		mysqli_stmt_bind_param($stmt, ssiiiiisssiss,$Username, $Hstatus, $Hbedrooms, $Hbathrooms, $Hgarages, $Hkitchens, $Hsittingrooms, $Hcity, $Hdistrict, $Hlocation, $Hprice, $Hcontact, $Hdiscription);
		mysqli_stmt_execute($stmt);
		header("Location: ../Uploadhouse_Admin.php?upload=success");
		exit();
	}

}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: ../welcome_Admin.php");
	exit();
}