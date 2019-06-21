<?php 
require 'includes/db.php';

$users = $conn->prepare("SELECT * FROM `student_details` WHERE `status`= 1");
$users->execute();


?>
<html>
<head>
<title>students table</title>
<style>
	body{
	background-color:darkolivegreen;
	}
	.or{
		 width:80%;
  height:90%;
  margin-left: 10%;
  margin-right: 10%;
  padding-left: 2%;
  background-color: white;
	}
</style>
</head>
<div class="or">
<body>
<table border="1">
<h2>Students who has already registered </h2>	
<tr>
</tr>
<tr>
	<th>student id</th>
	<th>Student name</th>
	<th>contact</th>
	<th>course</th>
	<th>year</th>
</tr>
<?php 
while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
echo"
<tr>   
<td>".$row['regNo']."</td>
<td>".$row['firstname']." ".$row['surname']."</td>
<td>".$row['emailaddress']."<br>".$row['phonenumber']."</td>
<td>".$row['program']."</td>
<td>".$row['academic_year']."</td>
</tr>
";
}
 ?>
</table>
</body>
</div>
</html>