<?php 
// Initialize the session
session_start();
require 'includes/dbh.inc.php';
// Check if the user is already logged in, if no then redirect him to signin page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: Signin.php");
  exit;
}

/*Deleting users*/
if (isset($_GET['user'])) {
  $id = $_GET['user'];
  $result = $conn->prepare("DELETE FROM users WHERE idUsers=?");
  $del = $result->execute(array($id));
  if ($del) {
    header('location: manage.php');
  }
}

//deleting items
//checking for the type of property
if (isset($_GET['prop'])) {
  $property = clean($_GET['prop']); 
  if (isset($_GET['del'])) {
   $num = clean($_GET['del']);
  }else{
    $num = 0;
  }
  if ($property == 'house') {
    $result = $conn->prepare("DELETE FROM houses WHERE Id=?");
    $result->execute(array($num));
    header('location: welcome-user.php');
    exit();
  }elseif ($property == 'land') {
      $result = $conn->prepare("DELETE FROM land WHERE Id=?");
      $result->execute(array($num));
      $result->execute(array($num));
      header('location: welcome-user.php');
      exit();
  }elseif ($property == 'godown') {
      $result = $conn->prepare("DELETE FROM godown WHERE Id=?");
      $result->execute(array($num));
      $result->execute(array($num));
      header('location: welcome-user.php');
      exit();
  }else{
      $result = $conn->prepare("DELETE FROM hostel WHERE Id=?");
      $result->execute(array($num));
      $result->execute(array($num));
      header('location: welcome-user.php');
      exit();   
  }
}else{
    echo "failed to delete";
}
