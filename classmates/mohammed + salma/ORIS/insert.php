<?php
if (isset($_POST['login'])) {
$registrationnumber = $_POST['registration'];
$password = $_POST['password'];

if (!empty($registrationnumber) || !empty($password)){
	$host = "localhost";
	$dbregistrationnumber = "root";
	$dbpassword = "";
	$dbname = "form";

   //create connection
	$conn = new mysqli($host, $dbregistrationnumber, $dbpassword, $dbname);
    
     if (mysqli_connect_error()){
     	die('connection error'.mysqli_connect_error());
     } else{
     	$SELECT = "SELECT registrationnumber From users Where registrationnumber= ? Limit 1";
     	$INSERT = "INSERT INTO users (registrationnumber, password) values(?,?,)";

  	//prepare statement
    $stmt = $conn ->prepare($SELECT);
    $stmt ->execute();
    $stmt ->bind_result($registrationnumber);
    $stmt ->store_result();
    $rnum = $stmt ->num_rows;

    if ($rnum==0){
    	$stmt->close();

    	$stmt = $conn->prepare($INSERT);
    	$stmt->bind_param("is",$registrationnumber,$password);
    	$stmt->execute();
    	echo "New record inserted sucessfully";
    } else {
    	echo "someone already register using this registrationnumber";
    }
    $stmt->close();
    $conn->close();
  }

}else {
	echo "All field are required";
	die();
}
}  
 
?>