<?php
session_start();
require 'dbh.inc.php';

if (isset($_POST['change-password'])) {
	$Npwd = $_POST['Npassword'];
	$CNpwd = $_POST['CNpassword'];
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
   	$change = $conn->prepare("UPDATE users SET uPwd = ? WHERE idUsers = ?");
    $UserID = $_SESSION['id'];
    $hashedPwd = password_hash($Npwd, PASSWORD_DEFAULT);
    $chg = $change->execute(array($hashedPwd, $UserID));
    if (!$chg) {
      header("Location: ../Change_password.php?error=sqlerror");
      exit();
    }else {
      session_destroy();
      header("Location: ../Signin.php?pwdchange=success");
      exit();
    } 
  }
}else {
  header("Location: ../Change_password.php");
  exit();  
}