<?php 
require 'includes/main.php';
session_start();
//the user has to be logged to add items to the cart
if (isset($_SESSION['loginEmail'])) {
    $email = $_SESSION['loginEmail'];
    $user = $db->prepare("SELECT * FROM `users` WHERE `Email`=:email");
    $user->execute(array(":email" => $email));
    $count = $user->rowCount();
    if($count == 0){
      header('location: login.php');
      unset($_SESSION['loginEmail']);
      $_SESSION['loginNotice'] = "Please login first to use Onoa shop";
    }
}else{
  header('location: login.php');
  $_SESSION['loginNotice'] = "Please login first to use Onoa shop";
}
if (isset($_GET['product'])){
    $prdname = cleaner($_GET['product']);
    $email = cleaner($_SESSION['loginEmail']);

    /*check if the user already has the items stored*/
    $check = $db->prepare("SELECT * FROM `cartitems` WHERE `itemName`=? AND `userSec`=?");
    $check->execute(array($prdname,$email));
    if ($check->rowCount()==0) {
        #add the item if its not yet added to the database
        $add = $db->prepare("INSERT INTO `cartitems` (`itemName`, `userSec`) VALUES (?, ?)");
        if ($add->execute(array($prdname, $email))) {
            echo $prdname." Has been added to cart";
        }else{
            echo "Item failed to add to cart please refresh and try again";
        }
    }else{
        //return message when the item is already in the cart
        echo $prdname." is already in your cart";
    }

}


?>