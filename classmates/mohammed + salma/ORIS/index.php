<?php 

require 'includes/db.php';

if (isset($_SESSION['userID'])) {
    header('location: project.php');
}else{
    if (isset($_POST['login'])) {
        
        $regNO = $_POST['regnum'];
        $pass = $_POST['password'];
        if (!empty($regNO) && !empty($pass)) {
            $pwd = md5($pass);
            $select = $conn->prepare("SELECT * FROM `student_details` WHERE `regNo`=:reg");
            $select->execute(array(":reg"=>$regNO));
            $row = $select->fetch(PDO::FETCH_ASSOC);
            if($select->rowCount()!==0){
                if ($row['password'] == $pwd){
                    $_SESSION['userID'] = $regNO;
                    header('location: project.php');
                }else{
                    echo 'wrong password entered';
                }
            }else{
                echo 'user not found in our database';
            }
        }else{
            echo 'Please fill in all the fields';
        }
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN">

<html>
<head>
	<title>REGISTRATION ONLINE </title>
<div class="mo">
	<dl>
   <dt><a class="active" href="index.php">Home</a></dt>
   <dt><a href="">About</a></dt>
   <dt><a href="">Contact Us</a></dt>
</dl>
</div>
	<!-- include style sheet -->
    <!-- include JavaScript -->
    <link rel="myproject" type="text/css" href="project.php">
	<script language="JavaScript" src="/function.js"></script>
	<style type="text/css">
		
		body {
			background: url(bgi.jpg);

		}
		

         .header9 {
         	width: 100%;
         	height: 150px;
         	margin-top: 0px;
         	background: black;
         	top: 50px;
         	opacity: .7;
         	color: white;
         	!-opacity: .5;
         }

         .header9 ul li {
         	float: right;
         	display: flex;
         	list-style: none;
         	font-size: 2rem;
            margin-right: 200px;
            margin-top: -6rem;
         	text-decoration: none;
         	font-family: sans-serif;
         	padding: 50px;
         }

         .logo {
         	height: 100px;
         	width: 90px;
         	position: relative;
         	padding-top: -6px;
         	margin-left: 15px;
         	margin-top: 7px;

         }

         .form tr td {
         	width: 1000px;
         }

         .form2 {
         	width: 100px;
         }    
         .mo{
    list-style-type:none;
    margin:0;
    padding:0;
    overflow:hidden;
    background-color:blue;
   }
  dt a{
    display:block;
    color:white;
    text-align:center;
    padding:15px 15px;
    text-decoration:none;
}
dt{
   float:left;
}
 dt a:hover{
    background-color:#4CAE51;
}
.active{
    background-color:#4CAE51;
} 
	</style>

</head>

<body>

	<div class="header9">

		<div class="logo"><img class="logo" src="logo.png"></div>

	 <ul>
	 	<li></li>
	 	<li>Registration Online System (ROS)</li>
	 	

	 </ul>

	</div>
	

<tr><td colspan=2 height=30 bgcolor="solidgreen">
		<table cellspacing="0" cellpadding="0" border="0" width=1000>
		<tr>
      
      <td style="color:#ffffff" align=left width=30%>&nbsp;&nbsp;</td>
  	        
      </tr>
		</table>
	</td></tr>
</table>

<table cellspacing="0" cellpadding="0" border="0" width=90% height=90%>
<tr>
    <td rowspan=2 width=150 valign=top align=center style="padding:5px" bgcolor="#9999"><table cellspacing="0" cellpadding="0" border="0">
		<tr>
		    <td align="left" style="padding-left: 1px;" valign=top>
			<td align="right"><button type="submit" value="Sign Up" class="button"><b><a href="register.php" style="color:#000;">Sign Up</a></td>
			<div class="EnclosureBox">
			<div class="SectionEnclosureBox"><div class="SectionOnBox"><a class="NavigationLink" href="/index.php"></a></div></div>			</div>
			<div>
			&nbsp;
			</div>
						</td>
		</tr>
	</table></td>
     <td valign=top class=normal>
        <div class=normal style="width:750;padding:15px 10px 15px 20px">
		
  

</script>
<body onload=focus1()>
<div class="header1">Welcome On our site</div>
<table cellspacing="0" cellpadding="0" border="0">
<tr>
    <td valign=top width=55%>
		The Registration Online System (ROS) Help students registered Online.
		<br><br>
		<div class="header4">What does ROS do?</div>
		ROS allows Students to  manage registaration online. Here is an example of what ROS can do:<br>
		<ul>
		<li><strong>Students</strong><br>
		<ul>
			<li>Register for Courses online</li>
			<li>Register students Online</li>
			<li>View list Number of Students registered</li>
		    <li>Payment Management</li>
		</ul><br>
		</li>
		</ul>
		</td>
    <td width=5%>&nbsp;</td>
    <td width=40% valign=top><table cellspacing="0" cellpadding="0" border="0">
		<tr>
		    <td>
		    	<div class="form">
			<table cellspacing="2" cellpadding="4" border="0" bgcolor="#706d83">
			<form action="index.php"  method="POST">
        			<tr><td colspan=2 bgcolor="#cfcfcf" class="header4"><strong>ROS Login</strong></td></tr>
        			<tr>
        				<td colspan="2">Welcome to ROS. Please login by entering your details in the form below. </td>
        			</tr>
        			<tr>
        				<td align=right><em>Registration Number:</em></td>
        				<td><input type="text" name="regnum"  id="un" size="20" required /></td>
        			</tr>
        			<tr>
        				<td align=right><em>Password:</em></td>
        				<td><input type="password" name="password" id="pwd" size="20" required/></td>
        			</tr>
        			<tr>
        				<td align="right"><button type="submit" name="login" value="Login" class="button">Login</button></td>
                                        
                                       
        			</tr>
                        
			</form>
						</table>
						</div>
       						</td>
		</tr>
	</table></td>
</tr>
</table>

<br>



		<hr noshade style="color:#cfcfcf" size=1>
		<table width=100% cellpadding=0 cellspacing=0>
			<tr>
				
				<td align=right><div class="copyright">Copyright &copy; 2019 ROS</div></td>
			</tr>
		</table>
		
		</div><br>
	</td>
</tr>
</table>

</body>
</html>

