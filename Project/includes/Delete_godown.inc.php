<?php

if (isset($_GET['Delete'])){
	$ID = $_GET['Delete'];
	$sql = "DELETE FROM godown WHERE idUsers=$ID;";

	header("Location: ../Searchgodown_Admin.php");
	exit();
	
}
?>
<!--
if (isset($_POST['Delete_User'])){
	
	require 'includes/dbh.inc.php';

    
	$sql = "DELETE FROM users WHERE idUsers = ?;";
	
	if($stmt = mysqli_prepare($conn, $sql)){
		mysqli_stmt_bind_param($stmt, "i", $id);
		$id = $row['idUsers'];

		if(mysqli_stmt_execute($stmt)){
			header("Location: ../User_Accounts.php?User=deleted");
		exit();
	}
	else{
            echo "Oops! Something went wrong. Please try again later.";
        }
}
// Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);

	
}
else {
	header("Location: ../User_Accounts.php");
		exit();
}-->