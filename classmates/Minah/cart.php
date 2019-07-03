<?php 
require 'includes/main.php';
session_start();
$id = 0;
$_SESSION['prods'] = array();

function zadd($product){
  $_SESSION['productsss'] = $product;
  echo $product.' has been added to cart';
}

if (isset($_GET['product'])) {
    $product = $_GET['product'];
    zadd($product);
}

?>