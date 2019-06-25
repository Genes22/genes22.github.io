<?php

$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];

// If  (!empty($username) || !empty($email) ||  !empty($password) )
// {
// 	$host = "localhost";
// 	$dbusername = "root";
// 	$dbpassword = "";
// 	$dbname = "onoa";
	
// 	// create connection 
// 	$conn = new myql ($host , $dbusername , $dbpassword , $dbname );
	
// 	if ( mysql_connect_error () ){
// 		die ('Connect  Error  ('. mysql_connect_error () .') '. ( mysql_connect_error () .')' ); 
// 	}
// 	else {
// 		$SELECT = "SELECT email From login Where email=? Limit1";
// 		$INSERT = "INSERT Into login (username, email, password ) values (?, ?, ?) ";
		
// 		//prepare statement
// 		$stmt = $conn-> prepare($SELECT);
// 		$stmt -> bind_param("s" , $email);
// 		$stmt -> execute (); 
// 		$stmt -> bind_result ($email);
// 		$stmt -> store_result();
// 		$rnum = $stmt -> num_rows();

// if ( $rnum==0) 
// {
// 	$stmt -> close();
	
// 	$stmt = $conn->prepare($INSERT);
// 	$stmt -> bind_param ("ssi", $username, $email, $password );
//     $stmt -> execute ();
	 
// 	 echo  "New recode inserted sucessfully";
	
// }
// 	else {
// 		echo "Someone already has registered using this email";
// 	}
	
// 	$stmt -> close();
// 	$conn -> close();
// 	}	
	
// }
// else {
// 	echo "All fields are required";
// 	die();
// }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>OnoA Shop | Account Page</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <header id="aa-header">
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>OnoA<strong>Shop</strong> <span>Your Online Ordering Partner</span></p>
                </a>
              </div>           
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
             <li><a href="aboutus.php">About Us</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
    </div>
  </section>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/advert-banner.jpg" alt="advert-banner img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Login</h4>
                 <form action="check.php" class="aa-login-form" method="POST">
                    <label for="">Username<span>*</span></label>
                    <input type="text" placeholder="Username" name="Username" required >
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="Password" required >
                    <input type="submit" name="Login" class="aa-browse-btn">                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

 


    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  

  </body>
</html>