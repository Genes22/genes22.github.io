<?php
if (isset($_POST['hostel-Submit'])) {

		require 'dbh.inc.php';
	
	$Hstatus = $_POST['Status'];
	$Helectric = $_POST['Electric'];
	$Hwater = $_POST['Water'];
	$Hfence = $_POST['Fence'];
	$Hself = $_POST['Self'];
	$Hfood = $_POST['Food'];
	$Hcity = $_POST['City'];
	$Hdistrict = $_POST['District'];
	$Hlocality = $_POST['Locality'];
	$Hprice = $_POST['Price'];
	$Hcontact = $_POST['Contact'];
	$Hdiscription = $_POST['Discription'];

	if (empty($Hstatus) || empty($Helectric) || empty($Hwater) || empty($Hfence) || empty($Hself) || empty($Hfood) || empty($Hcity) || empty($Hdistrict) || empty($Hlocality) || empty($Hprice) || empty($Hcontact) || empty($Hdiscription)) {
		header("Location: ../Uploadhostel_Admin.php?error=emptyfield");
		exit();
	}
    elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
        header("Location: ../Uploadhostel_Admin.php?error=invalidvalue");
        exit();
}
    elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../Uploadhostel_Admin.php?error=invalidcontact");
        exit();
}
     elseif (strlen($Hcontact) > 13) {
        header("Location: ../Uploadhostel_Admin.php?error=invalidcontact");
        exit();
}
else {
	$sql = "INSERT INTO hostel (uName, Status, Electricity, Water, Fence, Self_Contained, Locality, Price, Contact, Food, City,District, Discription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../Uploadhostel_Admin.php?error=sqlerror");
		exit();
	}
	else {
		session_start();
		$Username = $_SESSION['username'];

		mysqli_stmt_bind_param($stmt, sssssssisssss,$Username, $Hstatus, $Helectric, $Hwater, $Hfence, $Hself, $Hlocality, $Hprice,$Hcontact, $Hfood, $Hcity, $Hdistrict, $Hdiscription);
		mysqli_stmt_execute($stmt);
		header("Location: ../Uploadhostel_Admin.php?upload=success");
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