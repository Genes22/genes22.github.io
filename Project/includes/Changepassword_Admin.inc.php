<?php
session_start();
require 'dbh.inc.php';

if (isset($_POST['change-password'])) {
	$Npwd = $_POST['Npassword'];
	$CNpwd = $_POST['CNpassword'];

  if (empty($Npwd) || empty($CNpwd)) {
   	header("Location: ../Changepassword_Admin.php?error=emptyfield");
    exit();
  }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Npwd)) {
   	header("Location: ../Changepassword_Admin.php?error=invalidpwd");
    exit();
  }elseif (strlen($Npwd) < 8) {
   	header("Location: ../Changepassword_Admin.php?error=passwordlength");
    exit();
  }elseif ($Npwd !== $CNpwd){
   	header("Location: ../Changepassword_Admin.php?error=passwordcheck");
    exit();
  }else {
   	$update = $conn->prepare("UPDATE admin SET uPwd = ? WHERE idUsers = ?");
    $hashedPwd = password_hash($Npwd, PASSWORD_DEFAULT);
    $UserID = $_SESSION['id'];
    $up = $update->execute(array($hashedPwd, $userID)); 
    if (!$up) {
      header("Location: ../Changepassword_Admin.php?error=sqlerror");
      exit();
    }else {   
      session_destroy();
      header("Location: ../Signin_Admin.php?pwdchange=success");
      exit();
    }
  }
}else {
  header("Location: ../Changepassword_Admin.php");
  exit();  
}