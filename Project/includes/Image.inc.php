<?php
if (isset($_POST['image-Submit'])) {
	
	require 'dbh.inc.php';


    $Test = $_POST['test'];
	$Hphoto = addslashes(file_get_contents($_FILES['Photo']['tmp_name']));

 if (empty($Test) || empty($Hphoto)) {
 	echo "<script>alert('Plz fill all the Inputs')</script>";
 	header("Location: ../Image.php?emptyfield");
exit();
 }

	$query = "INSERT INTO images(test, name) VALUES ('$Test','$Hphoto')";

	if (mysqli_query($conn, $query)) {
		echo '<script>alert("Image Inserted Successful")</script>';
		header("location: ../Image.php");
		exit();
	}
	else {
		echo '<script>alert("Error")</script>';
	}
}



elseif (isset($_POST['image-View'])) {

require 'dbh.inc.php';

	$query = "SELECT * FROM images ORDER BY id DESC";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)) {
		echo '
<table border="1" height="20" width="10">
	<tr>
		<th>Image</th>
	</tr>
		<tr>
		        <td>
		        <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" />
		        </td>
		        </tr>
		        </table>';
		header("location: ../Image.php");
		exit();
	}

}
