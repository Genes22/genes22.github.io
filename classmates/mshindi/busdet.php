<?php 
require 'includes/daba.php';
if (isset($_POST['addbus'])) {
      $busname = $_POST['busName'];
      $from = $_POST['from'];
      $destination = $_POST['to'];
      
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
                move_uploaded_file($file_tmp,"assets/images/buses/".$file_name);
                $buspic = $filename;
            }else{
                print_r($errors);
            }
            $buspic = $filename;
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
</head>
<body>
	<div >
	<form method="POST" enctype="multipart/form-data" action="busdet.php" style ="margin-left: 15em; margin-bottom: 15em; font-size: 2em; margin-top: 7em">
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
</body>
</html>