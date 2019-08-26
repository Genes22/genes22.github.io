
<?php 
require 'includes/db.php';

if (isset($_POST['addsale'])) {
   
  $name = $_POST['item'];
  $qtty = $_POST['qtty'];
  $price  = $_POST['price'];
  
  if(!empty($name)){
    $sold= $conn->prepare("INSERT INTO `sales` (`product_name`, `amount`,`price`) VALUES (?, ?, ?)");
    if($sold->execute(array($name, $qtty, $price))){
      echo "sale added";
    }else{
      echo "Failed add sale to the database";
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
body {font-family: times new roman;font-style: oblique;  background-color:#ccc;}
* {box-sizing: border-box;}

th{ background-color:grey;  }
td {width: 100px}

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

}  ****joab***** 

</style>
</head>
<body>

<h1 style="text-align: center; font-family: times new roman; font-size: 25px;">Stock Checking System</h1>

  <div class="topnav">
  <a class="active" href="outerpage.html">Home</a>
   <a class="passive" href="regstock.html">Previous</a>
  <a class="passive" href="dailysales.php">Go Next</a>
  </div>


	<h1>ENTER SALES</h1>
 <form  action="addsales.php"  method="POST" style="font-family: times new roman; font-size: 20px; font-weight: bolder;">
  <!-- One "tab" for each step in the form: -->
  <table border="0">
<tr>
       <th>
                Sold Product
       </th>
       <th>
                Amount 
       </th>
       <th>
                Price  
       </th>
</tr>
  <tr>
    
    <td><input placeholder="mzigo ulouzwa"  name="item"></td>
    <td><input placeholder="kiasi chake"  name="qtty"></td>
    <td><input placeholder="gharama"  name="price"></td>
  </tr>
 
</table>
<input type="submit" name="addsale" value="Add Sale">
</form>
</body>
</html>