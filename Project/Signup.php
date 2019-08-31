<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | HOMESITE AND ESTATE AGENT ONLINE MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(90,125,251);">
            <div class="container"><a class="navbar-brand" href="#" style="font-family:Roboto, sans-serif;font-size:20px;">HOMESITE AND ESTATE AGENT ONLINE MENAGEMENT SYSTEM</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    </div>
    </nav>
    </div>
    <div style="color:rgb(254,254,254);">
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(177,77,71);">
            <div class="container-fluid"><a class="navbar-brand" href="./" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;width:217px;height:106px;background-color:#ffffff;background-image:url(&quot;assets/img/imagess.png&quot;);"></a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="./" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>Home</strong></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="about.html" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>About Us</strong></a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-size:17px;color:#ffffff;font-family:Alike, serif;"><strong>Upload..</strong></a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item text-info" role="presentation" href="uploadhouse.php" style="font-size:16px;"><strong>House</strong></a>
                                <a class="dropdown-item text-info" role="presentation" href="uploadland.php" style="font-size:16px;"><strong>Land</strong></a>
                                <a class="dropdown-item text-info" role="presentation" href="uploadgodown.php" style="font-size:16px;"><strong>Godown</strong></a>
                                <a class="dropdown-item text-info" role="presentation" href="uploadhostel.php" style="font-size:16px;"><strong>Hostel</strong></a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;color:#ffffff;"><strong>Search..</strong></a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item text-info" role="presentation" href="searchhouse.php" style="font-size:16px;"><strong>House</strong></a>
                                <a class="dropdown-item text-info" role="presentation" href="searchland.php" style="font-size:16px;"><strong>Land</strong></a>
                                <a class="dropdown-item text-info" role="presentation" href="searchgodown.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="searchhostel.php" style="font-size:16px;"><strong>Hostel</strong></a>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-primary active btn-sm float-right visible" role="button" href="signin.php" data-bs-hover-animate="pulse" style="margin-top:-3px;width:129px;background-color: green;margin-right:22px;"><strong>SIGN IN</strong></a>
                </div>
            </div>
        </nav>
    </div>
 <main>
    <div class="login-dark" style="background-image:url(&quot;assets/img/home.jpg&quot;);">
        <form action="includes/Signup.inc.php" method="post" style="background-color:rgba(30,40,51,0.68);margin-top:-131px;">
            <h3 style="margin-left:69px;margin-top:-37px;color:#ffffff;">
                <strong>SIGN UP</strong>
            </h3>

            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfield") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Please fill all the inputs</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidname") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Name should not contain numbers</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidEmailUsername") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid Username or E-mail!</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidEmail") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid E-mail!</strong>
            </p>';
                } 
                elseif ($_GET['error'] == "invalidUsername") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid Username!</strong>
            </p>';
                }
                elseif ($_GET['error'] == "invalidpwd") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Password must contain numbers and alphabets only</strong>
            </p>';
                }
                elseif ($_GET['error'] == "passwordlength") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Password must have at least 8 characters</strong>
            </p>';
                }  
                elseif ($_GET['error'] == "passwordcheck") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Password mismatch!</strong>
            </p>';
                } 
                elseif ($_GET['error'] == "invalidcontact") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Invalid Contact!</strong>
            </p>';
                } 
                elseif ($_GET['error'] == "usernametaken") {
                    echo '<p class="text-monospace text-center signup_error" id="signup_error" style="font-size:17px;color:rgb(255,0,0);"><strong>Username Already Taken!</strong>
            </p>';
                }              
            }
            ?>
            
            <!--<p class="text-monospace text-center signup_success" id="signup_success" style="font-size:17px;color:rgb(0,255,102);margin-top:-40px;">
                <strong>Error massages</strong>
            </p>-->
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Firstname" placeholder="First Name" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Lastname" placeholder="Last Name" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Username" placeholder="User Name" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-unlock-alt"></i>
                <input class="form-control form-control-sm" type="password" name="Password" minlength="8" placeholder="Password" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-unlock-alt"></i>
                <input class="form-control form-control-sm" type="password" name="RPassword"minlength="8" placeholder="Retype Password" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input class="form-control form-control-sm" type="email" name="Email" placeholder="E-mail" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-phone"></i>
                <input class="form-control form-control-sm" type="text" name="Contact" placeholder="Contact" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <button class="btn btn-primary active btn-block btn-sm" type="submit" name="signup-submit" data-bs-hover-animate="rubberBand" style="height:35px;">
                    <strong>Sing Up</strong>
                </button>
            </div>
            <a href="Signin.php" data-bs-hover-animate="pulse" class="forgot" style="color:rgb(0,240,255);">
                <strong>Already a Member? Sign In..</strong>
            </a>
        </form>
    </div>
</main>
<div class="footer-dark" style="background-color:rgb(0,0,0);">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col item social">
                    <a href="https://wa.me/+255763900709" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a>
                    <a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a>
                    <a href="https://instagram.com/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                    <a href="https://twitter.com/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
                </div>
            </div>
            <p class="copyright">TeflonDon © 2019</p>
        </div>
    </footer>
</div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>