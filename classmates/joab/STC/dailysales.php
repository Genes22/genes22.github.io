<?php 
 require 'includes/db.php';

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


}  ****joab***** 

</style>
</head>
<body>

<h1 style="text-align: center; font-family: times new roman; font-size: 25px;">Stock Checking System</h1>

  <div class="topnav">
  <a class="active" href="outerpage.html">Home</a>
   <a class="passive" href="regstock.html">Previous</a>
  <a class="passive" href="stockstatus.html">Go Next</a>
  </div>


	<h1>DAILY SALES</h1>
 <form  action="ingia.php"  method="POST" style="font-family: times new roman; font-size: 20px; font-weight: bolder;">
  <!-- One "tab" for each step in the form: -->
  <table border="0">
<tr>

<th>
        Sold Product
      </th>
<th>
      Amount Of Product
      </th>
<th>
     Expected Cost  
      </th>
</tr>
<?php 
$prods = $conn->prepare("SELECT * FROM  `sales`");
$prods->execute();
while ($sale = $prods->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>
        <td>".$sale['product_name']."</td>
        <td>".$sale['amount']."</td>
        <td>".$sale['Price']."</td>
        </tr>";
}

?>   
</table>
</form>
</body>
</html>