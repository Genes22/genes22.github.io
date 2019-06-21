<?php 
require 'includes/daba.php';
if (isset($_POST['addbus'])) {
      $busname = $_POST['busName'];
      $from = $_POST['from'];
      $destination = $_POST['to'];
      
      if(isset($_FILES['busPic'])){
      
            $buspic = $_FILES['busPic']['name'];
      
      }else {
            $buspic = "mshindi";
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
	<form method="POST" action="busdet.php" style ="margin-left: 15em; margin-bottom: 15em; font-size: 2em; margin-top: 7em">
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