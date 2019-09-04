<?php
session_start();
require 'dbh.inc.php';

if (isset($_POST['change-password'])) {
	$Npwd = clean($_POST['Npassword']);
	$CNpwd = clean($_POST['CNpassword']);
	if (empty($Npwd) || empty($CNpwd)) {
 	  header("Location: ../Change_password.php?error=emptyfield");
    exit();
 }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Npwd)) {
 	header("Location: ../Change_password.php?error=invalidpwd");
  exit();
 }elseif (strlen($Npwd) < 8) {
 	header("Location: ../Change_password.php?error=passwordlength");
  exit();
 }elseif ($Npwd !== $CNpwd){
 	header("Location: ../Change_password.php?error=passwordcheck");
  exit();
 }else {
  	$salt = "@_*_@";
    $pass = md5($salt.$Npwd.$salt);
    $id = $_SESSION['id'];
    $change = $conn->prepare("UPDATE users SET uPwd =? WHERE idUsers =?");
    $check = $change->execute(array($pass,$id));
    if ($check) {
      session_destroy();
      header("Location: ../Signin.php?pwdchange=success");
      exit(); 
    }  
  }
}else {
  header("Location: ../Change_password.php");
  exit();  
}



