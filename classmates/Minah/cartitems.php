<?php
session_start();
require 'includes/main.php';
//check if the use  is logged in to access the cart items
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
/*End session checking*/

//assign the session mail to use to query the database
$mail = $_SESSION['loginEmail'];
//fetching the cart items 
$cartitems = $db->prepare("SELECT * FROM `cartitems` WHERE `userSec`=?");
$cartitems->execute(array($mail));
//print_r($cartitems->rowCount());

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart items</title>
</head>
<body>
<table border="1">
<th>Item</th>
<th>price</th>
<th>Quatity</th>
<?php
while ($item = $cartitems->fetch(PDO::FETCH_ASSOC)){
 		echo "<tr><td>".$item['itemName']."</td>";
		//select the price from products
		$prd = $item['itemName'];
		$prdpr = $db->prepare("SELECT `ProductPrice` FROM `products` WHERE `ProductName`=?");
		$prdpr->execute(array($prd));
		$price = $prdpr->fetch(PDO::FETCH_ASSOC);
		echo "<td>".$price['ProductPrice']."</td>";
		echo "<td><input type='number' value='1'/></td></tr>";
} 
?>      
</table>

</body>
</html>