<?php
if (isset($_POST['land-Submit'])) {
	
	require 'dbh.inc.php';
	
	$Hstatus = $_POST['Status'];
	$Hlocation = $_POST['Locality'];
	$Hprice = $_POST['Price'];
	$Hcontact = $_POST['Contact'];
	$Hcity = $_POST['City'];
	$Hdistrict = $_POST['District'];
    $Harea = $_POST['Area'];
	$Hdiscription = $_POST['Discription'];
	
	if (empty($Hlocation) || empty($Hprice) || empty($Hcontact) || empty($Harea) || empty($Hdiscription)) {
		header("Location: ../Uploadland.php?error=emptyfield");
		exit();
	}
    elseif (!preg_match("/^[+0-9]*$/", $Hcontact)) {
        header("Location: ../Uploadland.php?error=invalidcontact");
        exit();
}
    elseif (strlen($Hcontact) > 13) {
        header("Location: ../Uploadland.php?error=invalidcontact");
        exit();
}
    elseif (!preg_match("/^[0-9]*$/", $Hprice)) {
        header("Location: ../Uploadland.php?error=invalidprice");
        exit();
}
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Harea)) {
        header("Location: ../Uploadland.php?error=invalidinputs");
        exit();
}
else {
	$sql = "INSERT INTO land (uName, Status, Location, Price, Contact, City, District, Area, Discription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../Uploadland.php?error=sqlerror");
		exit();
	}
	else {
		session_start();
		$Username = $_SESSION['username'];

		mysqli_stmt_bind_param($stmt, sssisssis,$Username , $Hstatus, $Hlocation, $Hprice, $Hcontact, $Hcity, $Hdistrict, $Harea, $Hdiscription);
		mysqli_stmt_execute($stmt);
		header("Location: ../Uploadland.php?upload=success");
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

