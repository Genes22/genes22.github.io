<?php
session_start();
require 'dbh.inc.php';

if (isset($_POST['change-password'])) {
	$Npwd = $_POST['Npassword'];
	$CNpwd = $_POST['CNpassword'];

	if (empty($Npwd) || empty($CNpwd)) {
 	header("Location: ../Change_password.php?error=emptyfield");
exit();
 } 
 elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Npwd)) {
 	header("Location: ../Change_password.php?error=invalidpwd");
exit();
 }
 elseif (strlen($Npwd) < 8) {
 	header("Location: ../Change_password.php?error=passwordlength");
exit();
 }
 elseif ($Npwd !== $CNpwd){
 	header("Location: ../Change_password.php?error=passwordcheck");
exit();
 }
 else {
 	$sql = "UPDATE users SET uPwd = ? WHERE idUsers = ?";
    $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../Change_password.php?error=sqlerror");
    exit();
  }
  else {

  	$hashedPwd = password_hash($Npwd, PASSWORD_DEFAULT);
    $UserID = $_SESSION['id'];
  	mysqli_stmt_bind_param($stmt, "si", $hashedPwd, $UserID);
    mysqli_stmt_execute($stmt);
     
    session_destroy();
    header("Location: ../Signin.php?pwdchange=success");
    exit();
      }
      
    }
 
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  else {
  header("Location: ../Change_password.php");
  exit();  
}



