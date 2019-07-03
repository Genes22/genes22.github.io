<?php
require 'includes/main.php';
session_start();
if(isset($_POST['register'])){
  $username = cleaner($_POST ['Username']);
  $email = cleaner($_POST ['Email']);
  $pass = cleaner($_POST ['Password']);
  $password = md5($pass);
  if(!empty($username) || !empty($email) || !empty($password)){
    //Querying data from and to the database
    $check = $db->prepare("SELECT Email From Users Where email=?");
    $check-> execute(array($email)); 
    $Unum = $check->rowCount();
    if ($Unum == 0) {
      $adduser = $db->prepare("INSERT INTO users(Username, Email, Password ) VALUES(?, ?, ?)");
      if($adduser->execute(array($username, $email, $password))){
        $_SESSION['email'] = $email;
        header('location: login.php'); 
      }else{
        $error = "Failed to register to the database";
      }
    }else {
        $error = " This email is already registered";
    }
  }else {
      $error  = "All fields are required";
  }
}
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
                <a href="./">
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
      <?php 
      if (isset($error)) {
        echo "<div class='alert alert-danger alert-dismissible  show' role='alert'>
          <strong>Failed.!!</strong> ".$error."
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
      }
    ?>
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
          <li><a href="./">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
        <p class="detailer">Please register to use our shop</p>
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
                 <h4>Register</h4>
                 <form action="register.php" class="aa-login-form" method="POST">
                    <label for="">Username<span>*</span></label>
                    <input type="text" placeholder="Username" name="Username" required >
                    <label for="">Email <span>*</span></label>
                    <input type="text" placeholder="E-mail" name="Email" required >
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="Password" required >
                    <input type="submit" name="register" class="aa-browse-btn" value="Register">
                    <div class="aa-register-now">
                      Already have an account? <a href="login.php"><b> Login!</b></a>
                    </div>
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

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login </h4>
          <form class="aa-login-form" action="login.php" method="POST">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email" required>
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" required>
            <button class="aa-browse-btn" type="submit" >Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Already have an account?<a href="login.php"><b>Login!</b></a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


    
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