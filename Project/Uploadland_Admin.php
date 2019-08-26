<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if no then redirect him to signin page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: Signin.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploadland</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
    <div>
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(0,0,0);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>About Us</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>
                    </ul><a href="Welcome_admin.php" data-bs-hover-animate="rubberBand" style="color:rgb(255,255,255);font-size:20px;"><strong>Back</strong><span><i class="typcn typcn-arrow-back" style="color:rgb(255,129,129);"></i></span></a></div>
            </div>
        </nav>
        <div id="wrapper" style="padding-left:0px;">
            <div id="sidebar-wrapper" style="background-color:rgba(0,0,0,0.56);">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#" style="color:rgb(255,255,255);"><strong>My Account</strong></a></li>
                    <li> <a href="Changepassword_Admin.php" style="color:rgb(255,255,255);">Change Password</a></li>
                </ul>

                <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout_Admin.inc.php" method="post">
                    <button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:116px;width:202px;background-color:rgb(255,90,90);margin-right:37px;">
                        <strong>Sign Out</strong>
                    </button>
                </form>
            </div>
        </div>

        <div class="container" style="padding-left:9px;width:756px;margin-top:20px;height:490px;">
            <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="includes/Uploadland_Admin.inc.php" method="post" 
                style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:481px;margin-left:91px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Upload Your Property Here...</strong>
                    </h2>
                </div>
                <div class="form-group" style="width:200px;margin-left:6px;">
                    <label style="color:rgb(255,255,255);">
                        <strong>Status:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Status" style="width:200px;color:rgb(0,0,0);">
                        <option value="For Sell" selected="">For Sell</option>
                        <option value="For Rent">For Rent</option>
                    </select>
                </div>
                <input
                    class="form-control form-control-sm" type="text" name="Locality" placeholder="Locality" style="width:200px;margin-left:4px;color:rgb(0,0,0);">
                    <div class="form-group" style="width:200px;margin-left:447px;margin-top:-110px;margin-bottom:21px;">
                        <label style="margin-bottom:18px;color:rgb(255,255,255);">
                            <strong>District:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="District" style="margin-top:-12px;width:200px;color:rgb(0,0,0);">
                            <option value="Kinondoni" selected="">Kinondoni</option>
                            <option value="Ilala">Ilala</option>
                            <option value="Temeke">Temeke</option>
                            <option value="Kigamboni">Kigamboni</option>
                        </select>
                    </div>
                    <input
                        class="form-control form-control-sm" type="text" name="Price" placeholder="Price(Tsh) Per Month" style="width:200px;margin-left:447px;margin-top:-4px;color:rgb(0,0,0);margin-bottom:0px;">
                        <div class="form-group" style="width:200px;margin-left:229px;margin-top:-111px;margin-bottom:178px;"><label style="color:rgb(255,255,255);">
                            <strong>City:</strong>
                        </label>
                            <select class="form-control form-control-sm" name="City" style="width:200px;color:rgb(0,0,0);">
                                <option value="Dar-es-Salaam" selected="">Dar-es-Salaam</option>
                            </select>
                        </div>
                        <input
                            class="form-control form-control-sm" type="text" name="Contact" placeholder="Contact" style="width:200px;margin-left:229px;margin-top:-162px;color:rgb(0,0,0);margin-bottom:44px;">
                            <input class="form-control form-control-sm" type="text" name="Area" placeholder="Area(Meter Square)" style="width:200px;margin-left:229px;margin-top:-33px;color:rgb(0,0,0);">
                            <div class="form-group" style="margin-left:6px;width:629px;">
                                <label style="color:rgb(255,255,255);">
                                    <strong>More Discription:</strong>
                                </label>
                                <textarea class="form-control" name="Discription" maxlength="500" style="width:639px;height:137px;color:rgb(0,0,0);">
                                    
                                </textarea>
                            </div>

                            <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == "emptyfield"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                    <strong>Fill all the inputs!..</strong>
                                </p>';                                    
                                }
                                if ($_GET['error'] == "invalidcontact"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                    <strong>Invalid contact!..</strong>
                                </p>';                                    
                                } 
                                if ($_GET['error'] == "invalidprice"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                    <strong>Invalid value for price!..</strong>
                                </p>';                                    
                                }
                                if ($_GET['error'] == "invalidinputs"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                    <strong>Invalid value for Area!..</strong>
                                </p>';                                    
                                }
                                if ($_GET['error'] == "sqlerror"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                    <strong>Sorry! System error,try again later..</strong>
                                </p>';                                    
                                }                                
                            }
                            else if (isset($_GET['upload'])) {
                                if ($_GET['upload'] == "success"){
                                echo'<p
                                class="text-center success" id="success" style="color:rgb(20,255,0);">
                                <strong>Your post is successful uploaded..</strong>
                            </p>';                                   
                                }
                            }
                            ?>
                            
 
                                <div class="form-group" style="margin-left:-110px;">
                                    <button class="btn btn-primary active" type="submit" name="land-Submit" data-bs-hover-animate="rubberBand" style="width:283px;margin-left:299px;margin-top:10px;">
                                        <strong>Upload..</strong>
                                    </button>
                                </div>
            </form>
        </div>
    </div>

    <div class="footer-dark" style="background-color:rgb(0,0,0);">
        <footer>
            <div class="container">
                <div class="row">
                    <!--<div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>-->
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                        <a
                            href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
                    </div>
                </div>
                <p class="copyright">TeflonDon © 2019</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>