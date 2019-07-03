<?php 
require 'includes/db.php';

if (isset($_POST['addprd'])) {
   
  $name = cleaner($_POST['prdname']);
  $qtty = cleaner($_POST['qtty']);
  $price  = cleaner($_POST['price']);
  
  if(!empty($name)){
    $i= $conn->prepare("INSERT INTO `product` (`item_name`, `item_amount`,`Price`) VALUES (?, ?, ?)");
    if($i->execute(array($name, $qtty, $price))){
      $success = "Successfully added the product";
    }else{
      echo "Failed to add stocks";
    }
  }else{
    echo "empty variables";   
  }
}
?>

<!DOCTYPE html>
 <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: times new roman;font-style: oblique;  background-color: #ccc;}
* {box-sizing: border-box;}

th{ background-color:grey;  }
td {width: 100px}

.sub {
  padding: 10px 20px;
  margin-left: 10em;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #999;
}

.sub:hover {background-color: blue}

Jacque{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:blue;
  color: white;
  float: left;
      border: none;
  border-radius: 15px;
  box-shadow: 0 9px pink;
}


.topnav a.passive {
  background-color:magenta;
  color: white;
  float: left;
      border: none;
  border-radius: 15px;
  box-shadow: 0 9px pink;
}


}  ****joab***** 

</style>
</head>
<body>
<h1 style="text-align: center; font-family: times new roman; font-size: 25px;">Stock Checking System</h1>

  <div class="topnav">
  <a class="active" href="outerpage.html">Home</a>
  <a class="passive" href="ingizamauzo.html">Go Next</a>
  </div>
  <h1>Register Stock</h1>

<?php 
if (isset($success)) {
  echo $success;
  unset($success);
}

?>
 <form action="regstock.php"  method="POST"  style="font-family: times new roman;font-size:20px; font-weight: bolder;">
  <!-- One "tab" for each step in the form: -->
  <table border="0">
    <tr>
      <th>
        itemName
      </th>
      <th>
        itemAmount
      </th>
      <th>
        originalprice
      </th>
    </tr>
 <tr >
    <td><input type="text" name="prdname" placeholder="item name"></td>
    <td><input type="number" name="qtty" placeholder="amount"></td>
    <td><input type="number" name="price" placeholder="price"></td>
  </tr>                                                 
</table>
<input type="submit" name="addprd" value="Add product">
</form>
</body>
</html>