<?php 
require '../includes/daba.php';
session_start();

//checking if the logout button is pressed before checking the session data
//logout section 
if (isset($_POST['logout'])) {
  unset($_SESSION['busSecurity']);
}

//making sure that the user is logged in before using the module
//if the logout button is pressed the code below will redirect the user to the login page.
if (!isset($_SESSION['busSecurity'])) {
  header('location: ./');
  if (isset($_SESSION['loginSuccess'])) {
    unset($_SESSION['loginSuccess']);
  }
}

//checking if the add bu button if pressed before processing the form details.
if (isset($_POST['addbus'])) {
  $busname = $_POST['busName'];
  $from = $_POST['from'];
  $destination = $_POST['to'];
  //processing the uploaded image
  if (isset($_FILES['busPic'])) {
      $file_name = $_FILES['busPic']['name'];
      $file_size = $_FILES['busPic']['size'];
      $file_tmp = $_FILES['busPic']['tmp_name'];
      $file_type = $_FILES['busPic']['type'];
      $path_parts = pathinfo($file_name);
      $file_ext = strtolower($path_parts['extension']);
      $filename = $path_parts['filename'];
      $imageName = cleaner($filename.'.'.$file_ext);
      //Short version of the above 3 lines of code
      //$file_ext = strtolower(end(explode('.',$_FILES['ProductImage']['name'])));
      $extensions = array("jpeg", "jpg", "png");

      if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
       }     
      if($file_size > 2097152) {
          $errors[]='File size must be excately 2 MB';
      }
      if(empty($errors)==true) {
        //moving the image file to products directory
          move_uploaded_file($file_tmp,"../assets/images/buses/".$imageName);
          $buspic = $imageName;
      }else{
          print_r($errors);
      }
      $buspic = $imageName;
    }
  $busfare = $_POST['fare'];
  $seats= $_POST['Totalseats'];
  $plate = $_POST['PlateNumber'];
  $phone = $_POST['BusPhone'];
  if (!empty($busname)) {
      $add = $db->prepare("INSERT INTO `onlinebus_booking`.`bus_details` (`name`, `location`, `destination`, `number_seats`, `plate_number`, `bus_phone`, `bus_photo`) VALUES (?, ?, ?, ?, ?, ?, ?)");
      if($add->execute(array($busname, $from, $destination,  $seats, $plate, $phone, $buspic))){
        echo "bus added";
      }else{
        echo "failed to add the bus";
      }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>add bus details</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
  </head>
<body>
	<div>
  <?php 
      if (isset($_SESSION['loginSuccess'])) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Success!</strong>".$_SESSION['loginSuccess']."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span></button></div>";
              unset($_SESSION['loginSuccess']);
      }
  ?>
  <button class="btn btn-success" style="float: left;"><a href="wateja.php" style="color: white;">View Tickets</a></button>
	<form method="POST" enctype="multipart/form-data" action="busdet.php" style ="margin-left: 13em; margin-bottom: 13em; font-size: 2em ; margin-top: 5em">
    <input type="submit" class="btn btn-danger" name="logout" style="float: right;" value="Logout">
		<label for="busName">Bus name</label>
      <input type="text" name="busName" placeholder="Bus name"> <br>
      <label for="from">from</label>
      <select name="from">
      <option value="Dar Es Salaam" >Dar Es Salaam</option>
      	<option value="Mwanza" >Mwanza</option>
      	<option value="Dodoma" >Dodoma</option>
      	<option value="Kilimanjaro" >Kilimanjaro</option>
      	<option value="Arusha" >Arusha</option>
      	<option value="Morogoro" >Morogoro</option>
      	<option value="Iringa" >Iringa</option>
      	<option value="Tanga" >Tanga</option>
      	<option value="Singida" >Singida</option>
      	<option value="Mbeya" >Mbeya</option>
      	<option value="Njombe" >Njomba</option>
      	</select>
      <label for="to">To</label>
      <select name="to">
      	<option value="Dar Es Salaam" >Dar Es Salaam</option>
      	<option value="Mwanza" >Mwanza</option>
      	<option value="Dodoma" >Dodoma</option>
      	<option value="Kilimanjaro" >Kilimanjaro</option>
      	<option value="Arusha" >Arusha</option>
      	<option value="Morogoro" >Morogoro</option>
      	<option value="Iringa" >Iringa</option>
      	<option value="Tanga" >Tanga</option>
      	<option value="Singida" >Singida</option>
      	<option value="Mbeya" >Mbeya</option>
      	<option value="Njombe" >Njomba</option>
      </select><br>
      <label for="busPic">Bus picture</label>
      <input type="file" name="busPic"><br>
      <label for="fare">Bus fare</label>
      <input type="number" name="fare" placeholder="20000"><br>
      <label for="Totalseats">Number of seats</label>
      <input type="number" name="Totalseats" placeholder="60"><br>
      <label for="PlateNumber">Bus number</label>
      <input type="number" name="PlateNumber"><BR>
      <label for="BusPhone">Bus phone</label>
      <input type="number" name="BusPhone">
      <input type="submit" name="addbus">
	</form>
	</div>
<!-- scripts section -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>