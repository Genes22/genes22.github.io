<?php 
require 'includes/db.php';
if (!isset($_SESSION['userID'])) {
	header('location: index.php');
}else{	
	if (isset($_POST['next'])) {
		//fetching the data from the form
		$yr1 = $_POST['year1'];

		$yr2 = $_POST['year2'];
		$year = "$yr1"."/"."$yr2";
		$semester = $_POST['semester'];
		$dptmnt = $_POST['department'];
		$prog = $_POST['program'];
	    $sname = $_POST['surname'];
	    $fname = $_POST['firstName'];
	    $mname = $_POST['middleName'];
	    $nati = $_POST['nationality'];

	    $sec = $_SESSION['userID'];
	    //checking for empty variables
		if (!empty($yr1) && !empty($yr2)){
			$update = $conn->prepare("UPDATE `student_details` SET `firstname` = ?, `middlename` = ?, `surname` = ?, `nationality` = ?, `semester` =?, `department` = ?, `program` = ?,`academic_year` = ? WHERE `regNo` = ? ");
	        $changer  = $update->execute(array($fname, $mname, $sname, $nati, $semester, $dptmnt, $prog, $year, $sec));
	        if($changer){
				header('location: project2.php');			
			}else{
				echo 'failed to update the data in the database';
			}
		}else{
			echo "the inputs are empty";
		}
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="home.html">
<title>ONLINE REGISTRATION SYSTEM</title>
<style>
   
 ul{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color:black;
   }
  li a{
    display:block;
    color:white;
    text-align:center;
    padding:15px 15px;
    text-decoration:none;
}
li{
   float:left;
}
 li a:hover{
   background-color:#4CAE51;
}
.active{
    background-color:#4CAE51;
}

.logo {
         	height: 100px;
         	width: 90px;
         	position: relative;
         	padding-top: -6px;
         	margin-left: 15px;
         	margin-top: 7px;

         }

</style>
</head>
<body>
<ul>
   <li><a href="logout.php">Logout</a></li>
   </ul>
<div class="main">
	<hr noshade style="color:solidblack" size=5 style="top: 10px;">
	<table>
		<tr>
	       <td><input type="file"></td>
	   </tr>
	</table><br><br>
	<div class="logo"><img class="logo" src="logo.png"></div>
	<h1>UNIVERSTY OF DAR ES SALAAM.</h1>                 	
	<h3>REGISTRATION FORM FOR COICT STUDENTS</h3>   
	<hr noshade style="color:black" size=5>
	<h1>SECTION A : Academic details.</h1>
	<h3>NOTE:This form must be completed by every continuing students at the beginning of every semester</h3>
<form action="project.php"  method="POST">
	Academic year 
  <input type="number" name="year1" min="2017" max="2024"><b>/</b><input type="number" name="year2" min="2018" max="2025"><br><br>

<label for="Semester"><b></label><br>
	<input type="radio" name="semester" value=" Semester 0ne">Semester One<br>
	<input type="radio" name="semester" value="Semester Two">Semester Two<br><br>  
	

	<label for="Registration Number"><b>Registration Number</b></label>
	<input type="text"placeholder="<?php print_r($_SESSION['userID']) ?> "name="reg" disabled required><br><br>

	<label for="Department"><b>Department</b></label>
	<select name="department">
                <option></option>
		<option value="computer science">Computer science and Engineering</option>
		<option value="Electronics">Electronics and Telecommunication</option>
    </select><br><br>
	<label for="Programme"><b>Programme</b></label>
  <select name="program">
        <option></option>
  	<option value="certificate">Certificate in Computer science and Engineering</option>
  	<option value="diploma">Diploma in Computer science and Engineering</option>
  	<option value="Bachelor">Bachelor in Computer science and Engineering</option>
  	<option value="degree">Bachelor in Electronics and Telecommunication</option>
  </select><br><br>
	
	<label for="First name"> <b>First name</b> </label>
	<input type="text" placeholder="" name="firstName" required><br><br>
	<label for="Middle name"><b>Middle name</b></label>
	<input type="text" placeholder="" name="middleName" required><br><br>
	<label for="Surname"><b>Surname</b></label>
	<input type="text" placeholder="" name="surname" required><br><br>
	<label for="Nationality"><b>Nationality</b></label>
	<select name="nationality">   
		<option value="Tanzanian">Tanzanian</option>
		<option value="Uganda">uganda</option>
		<option value="kenyan">kenyan</option>
		<option value="American">american</option>
		<option value="Rwandan">Rwandan</option>
		<option value="Indian">Indian</option>
		<option value="nigerian">nigerian</option>
		<option value="Liberian">Liberian</option>
		<option value="Portugues">Portugues</option>
		<option value="Ethiopian">Ethiopian</option>
		<option value="Algerian">Algerian</option>
		<option value="Zambia">Zambia</option>
		<option value="Somalian">Somalian</option>
		<option value="South sudan">South sudan</option>
		<option value="Malawian">Malawian</option>
		<option value="Egypt">Egypt</option>
		<option value="Ivory coast">Ivory coast</option>
		<option value="German">German</option>
		<option value="South Africa">South Africa</option>
		<option value="Burundian">Burundian</option>
		<option value="Zimbabwe">Zimbabwe</option>
		<option value="France">France</option>
	</select><br><br>
	<input type="submit" name="next" value="next" class="button">
</form>
<br><br>



		<hr noshade style="color:#cfcfcf" size=1>
		<br>
</div>
</body>
</html>