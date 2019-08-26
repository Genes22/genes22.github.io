<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
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
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(0,0,0);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.48);"><strong>Home</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.48);"><strong>About Us</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>
                    </ul>
                    <!--<a class="btn btn-primary active" role="button" href= data-bs-hover-animate="jello" style="font-size:13px;background-color:rgb(0,211,59);margin-right:15px;"><strong>ADMIN</strong></a>-->
                    <span class="navbar-text actions"> <a class="btn btn-light active action-button" role="button" href="Signup.php"><strong>Sign Up</strong></a>
                    </span></div>
            </div>
        </nav>
    </div>
    <div class="login-dark" style="background-image:url(&quot;assets/img/home.jpg&quot;);">
        <form action="includes/Signin.inc.php" method="post" style="background-color:rgba(30,40,51,0.68);margin-top:-201px;">
            <h2 class="sr-only">Login Form</h2>
            <h3 style="margin-left:70px;margin-top:-37px;color:#ffffff;">
                <strong>SIGN IN</strong>
            </h3>
            <div class="illustration" style="background-color:rgba(0,0,0,0.27);height:151px;">
                <i class="fa fa-user-o"></i>
            </div>
            <div class="form-group">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-sm" type="text" name="Username" placeholder="UserName/Email" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>
            <div class="form-group">
                <i class="fa fa-unlock-alt"></i>
                <input class="form-control form-control-sm" type="password" name="Password" placeholder="Password" style="background-color:#ffffff;color:rgb(0,0,0);font-size:15px;">
            </div>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET['error'] == "emptyfield") {
                    echo '<p class="text-monospace text-center signin_error"
                id="signin_error" style="color:rgb(255,0,0);">
                <strong>Please fill all the inputs</strong>
            </p>';
                }
                else if ($_GET["error"] == "wrongpassword") {
                    echo '<p class="text-monospace text-center signin_error"
                id="signin_error" style="color:rgb(255,0,0);">
                <strong>Wrong Password!..</strong>
            </p>';
                }
                else if ($_GET["error"] == "nouser") {
                    echo '<p class="text-monospace text-center signin_error"
                id="signin_error" style="color:rgb(255,0,0);">
                <strong>Oops!..No user found!..</strong>
            </p>';
                }
            }
            else if (isset($_GET["signup"])) {
                if ($_GET['signup'] == "success") {
                echo '<p class="text-monospace text-center signin_success" id="signinsuccess" style="color:rgb(0,255,56);margin-top:-20px;">
                <strong>Signup successful!,You can now signin to your account</strong>
            </p>';
                }

            }
           else if (isset($_GET["signout"])) {
                if ($_GET['signout'] == "success") {
                echo '<p class="text-monospace text-center signin_success" id="signinsuccess" style="color:rgb(0,255,56);margin-top:-20px;">
                <strong>Your signed out..</strong>
            </p>';
                }
            }
            else if (isset($_GET["pwdchange"])) {
                if ($_GET['pwdchange'] == "success") {
                echo '<p class="text-monospace text-center signin_success" id="signinsuccess" style="color:rgb(0,255,56);margin-top:-20px;">
                <strong>You can now signin with your new password</strong>
            </p>
 ';
                }
            }
             ?>
            <div class="form-group">
                <button class="btn btn-primary active btn-block btn-sm" type="submit" name="signin-submit" data-bs-hover-animate="rubberBand" style="height:35px;">
                    <strong>Sign In</strong>
                </button>
            </div>
            <a href="Signup.php" data-bs-hover-animate="pulse" class="forgot" style="color:rgb(0,255,209);">
                <strong>Not Yet a Member? Sign Up..</strong>
            </a>
        </form>
        
    </div>
    <div class="footer-dark" style="background-color:rgb(0,0,0);">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                        <a href="Signin_Admin.php" data-bs-hover-animate="rubberBand"><i class="fa fa-expeditedssl"></i></a>
                    </div>
                </div>
                <p class="copyright">TeflonDon © 2019</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>