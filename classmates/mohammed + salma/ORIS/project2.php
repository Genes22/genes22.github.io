<?php 
require 'includes/db.php';
if (!isset($_SESSION['userID'])) {
	header('location: index.php');
}else{	
	if (isset($_POST['complete'])) {
		//fetching the data from the form
		$maritalst = $_POST['maritalStatus'];
		$homeaddr = $_POST['HomeAddress'];
		$hall = $_POST['residence'];
		$code = $_POST['phonecode'];
	    $next = $_POST['telep'];
	    $phone = $code.$next;
	    $email = $_POST['email'];
	    $religion = $_POST['religion'];
	  
	    $sec = $_SESSION['userID'];			
	    //checking for empty variables
		if (!empty($email) && !empty($religion)){
			$update = $conn->prepare("UPDATE `student_details` SET `hallofresidence` = ?, `homeaddress` = ?, `phonenumber` = ?, `maritalstatus` = ?, `emailaddress` =?, `religion` = ?, `status` = 1  WHERE `regNo` = ? ");
	        $changer  = $update->execute(array($hall, $homeaddr, $phone, $maritalst, $email, $religion, $sec));
	        if($changer){
				header('location: registeredUsers.php');			
			}else{
				echo 'failed to update the data in the database';
			}
		}else{
			echo "the inputs are empty";
		}
	}
}

?>
<html>
<Doctype html>
	<head>
		<title>online registration form</title>
<style type="text/css">
	body {
  background-color: rgb(82, 86, 89);
  color: var(--primary-text-color);
  line-height: 154%; 
  margin:0;
}

   .main{
  width:80%;
  height:125%;
  margin-left: 10%;
  margin-right: 10%;
  padding-left: 2%;
  background-color: white;
 }

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
	<ul>
	 <li><a href="project.html"><b>Back</b></a></li>
   </ul>
   
	<body>
		<div class="main">
			<hr noshade style="color:solidblack" size=5 style="top: 10px;">
	<div class="logo"><img class="logo" src="logo.png"></div>
		<h1>UNIVERSTY OF DAR ES SALAAM.</h1>                 	
	<h3>REGISTRATION FORM FOR COICT STUDENTS</h3>   
	<hr noshade style="color:black" size=5>
		
<form action="project2.php"  method="POST">		
<h1>SECTION B:Personal details</h1>
	<h3>To be filled only if there are changes on what was stated in the first year.</h3>
	<label for="Marital status"><b>Marital status</b></label><br>
	<input type="radio"name="maritalStatus" value="Married">Married<br>
	<input type="radio"name="maritalStatus" value="Single">Single<br>
	<input type="radio"name="maritalStatus" value="Divorce">Divorce<br>
	<input type="radio"name="maritalStatus" value="Widowed">Widowed<br><br>
	<label for="Home address"><b>Home address</b></label>
<textarea name="HomeAddress" rows="3" cols="19">
    </textarea><br><br>
	
	<label for="Hall of residence"><b>Hall of residence</b></label>
<input type="text"  placeholder="" name="residence" size="30"> <br><br>
	<table>
		<tr>
			<td><b>Phone Number</b></td>
			<td>
				<select name="phonecode">
					<optgroup value="country" >
					<option value="+255">+255</option>
					<option value="+254">+254</option>
					<option value="+213">+213</option>
					<option value="+911">+91</option>
					<option value="+977">+977</option>
					<option value="+973">+973</option>
					<option value="+256">+256</option>
					<option value="+252">+252</option>
					<option value="+251">+251</option>
					<option value="+214">+214</option>
					<option value="+258">+258</option>
					</optgroup>
				</select>
	                <input type="tel"  name="telep"  size="30">
	            </td>
	        </tr>
	</table><br>

	<label for="email"><b>Email Address</b></label>
	    <input type="email" name="email" value="example@gmail.com" size="20"><br><br>
	<label for="Religion"><b>Religion</b></label>
	<select name="religion">    
        <option></option>
	<option value="Muslim">Muslim</option>
	<option value="Christian">Christian</option>
	<option value="Others">Others</option>
	</select><br><br>
	<input type="submit" name="complete" value="Complete">
</td>
</form>
<hr noshade style="color:#cfcfcf" size=1>
		<br>

	</body>
	</div>
	</html>	