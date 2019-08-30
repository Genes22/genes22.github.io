<?php
// Initialize the session
require_once 'auth.php';
if (isset($_GET['prop'])) {
    $prop = $_GET['prop'];
}else{
    $prop = 'house';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploadhoddsuse</title>
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
            <div class="container-fluid"><a class="navbar-brand" href="./" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>About Us</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.html" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>
                    </ul><a href="Welcome_user.php" data-bs-hover-animate="rubberBand" style="color:rgb(255,255,255);font-size:20px;"><strong>Back</strong><span><i class="typcn typcn-arrow-back" style="color:rgb(255,129,129);"></i></span></a></div>
            </div>
        </nav>
        <div id="wrapper">
            <div id="sidebar-wrapper" style="background-color:rgba(0,0,0,0.39);height:589px;">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#" style="color:rgb(255,255,255);"><strong>My Account</strong></a></li>
                    <li> <a href="Change_password.php" style="color:rgb(255,255,255);">Change Password</a></li>
                </ul>
                <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post">
                    <button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:116px;width:202px;background-color:rgb(255,90,90);margin-right:37px;">
                        <strong>Sign Out</strong>
                    </button>
                </form>
            </div>
        </div>

        <div class="container" style="padding-left:9px;width:756px;height:572px;">
            <div>
            <!-- 
                for uploading house images
             -->
 <!-- House images  -->           <?php if ($prop == 'house'): ?>
                <form enctype="multipart/form-data" class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="includes/Uploadhouse.inc.php" method="post" style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:569px;margin-left:91px;">
                    <div class="form-group" style="margin-left:-62px;">
                        <h2 style="margin-left:195px;color:rgb(255,255,255);">
                            <strong>Upload Your House Here...</strong>
                        </h2>
                    </div>
                    <div class="form-group" style="width:200px;margin-left:6px;">
                        <label style="color:rgb(255,255,255);">
                            <strong>Status:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="Status" style="width:200px;color:rgb(0,0,0);" required>
                            <option value="For Sell" selected="">For Sell</option>
                            <option value="For Rent">For Rent</option>
                        </select>
                        <label
                            style="color:rgb(255,255,255);">
                            <strong>Kitchens:</strong>
                        </label>
                        <input class="form-control form-control-sm" type="number" max="10" min="0" value="0" required name="Kitchens" style="width:200px;color:rgb(0,0,0);">
                            <label
                                style="color:rgb(255,255,255);">
                                <strong>City:</strong>
                            </label>
                            <select class="form-control form-control-sm" name="City" style="width:200px;color:rgb(0,0,0);" required>
                                <option value="Dar-es-Salaam" selected="">Dar-es-Salaam</option>
                            </select>
                        </div>
                        <input class="form-control form-control-sm" type="text" name="Locality" placeholder="Locality" style="width:200px;margin-left:4px;color:rgb(0,0,0);" required>
                        <div class="form-group" style="width:200px;margin-left:447px;margin-top:-235px;margin-bottom:21px;"><label style="margin-bottom:18px;color:rgb(255,255,255);">
                            <strong>Bathrooms:</strong>
                        </label>
                        <input class="form-control form-control-sm" type="number" min="1" max="15" value="0" name="Bathrooms" style="margin-top:-12px;width:200px;color:rgb(0,0,0);">
                            <label
                                style="color:rgb(255,255,255);">
                                <strong>Garages:(<i>optional</i>)</strong>
                            </label>
                            <select class="form-control form-control-sm" name="Garages" style="width:200px;color:rgb(0,0,0);">
                                <option value="None" selected="">None</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                                <label
                                    style="color:rgb(255,255,255);">
                                    <strong>District:</strong>
                                </label>
                                <select class="form-control form-control-sm" name="District" style="width:200px;color:rgb(0,0,0);">
                                    <option value="Kinondoni" selected="">Kinondoni</option>
                                    <option value="Ilala">Ilala</option>
                                    <option value="Temeke">Temeke</option>
                                    <option value="Kigamboni">Kigamboni</option>
                                </select>
                            </div>
                        <input
                            class="form-control form-control-sm" type="number" min="1" name="Price" placeholder="Price(Tsh) Per Month" style="width:200px;margin-left:447px;margin-top:-4px;color:rgb(0,0,0);margin-bottom:0px;">
                            <div class="form-group" style="width:200px;margin-left:229px;margin-top:-237px;margin-bottom:178px;">
                                <label style="color:rgb(255,255,255);">
                                    <strong>Bedrooms:</strong>
                                </label>
                                <select class="form-control form-control-sm" name="Bedrooms" style="width:200px;color:rgb(0,0,0);">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                <label
                                    style="color:rgb(255,255,255);">
                                    <strong>Sittingrooms(<i>Optional</i>):</strong>
                                </label>
                                <select class="form-control form-control-sm" name="Sittingrooms" style="width:200px;color:rgb(0,0,0);">
                                    <option value="None" selected="">None</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
            
                            </div>
                            <input class="form-control form-control-sm" type="text" name="Contact" placeholder="Contact" style="width:200px;margin-left:229px;margin-top:-97px;color:rgb(0,0,0);">
                                <label for="imageh" style="color:white"><b>House photo: </b></label>
                                <input type="file"  name="imageh" style="width:200px;margin-left:20px;margin-top:20px;color:rgb(0,0,0);" required><br><br>
                                
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
                                    if ($_GET['error'] == "invalidvalue"){
                                        echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                        <strong>Invalid value for price!..</strong>
                                    </p>';
                                    }
                                    if ($_GET['error'] == "invalidcontact"){
                                        echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                        <strong>Invalid contact!..</strong>
                                    </p>';
                                    }
                                    if ($_GET['error'] == "sqlerror"){
                                        echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                        <strong>Sorry! System error,try again later..</strong>
                                    </p>';
                                    }

                            }
                            else if (isset($_GET['upload'])) {
                                if ($_GET['upload'] == "success")
                                    echo'<p
                                    class="text-center success" id="sucess" style="color:rgb(5,255,0);">
                                    <strong>Your post is successful uploaded..</strong>
                                </p>';
                            }
                            ?>
                            <div class="form-group" style="margin-left:-110px;">
                                <button class="btn btn-primary active" type="submit" name="house-Submit" data-bs-hover-animate="rubberBand" style="width:283px;margin-left:299px;margin-top:-7px;">
                                    <strong>Upload..</strong>
                                </button>
                            </div>
                            </form>
                            <?php endif ?>
                                
                                <!-- For uploading the lands images -->

<!-- Land   -->     <?php if ($prop == 'land'): ?>
                    <form enctype="multipart/form-data" class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="includes/Uploadland.inc.php" method="POST" 
                    style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:481px;margin-left:91px;">
                    <div class="form-group" style="margin-left:-62px;">
                        <h2 style="margin-left:195px;color:rgb(255,255,255);">
                            <strong>Upload Your Land Here...</strong>
                        </h2>
                    </div>
                    <div class="form-group" style="width:200px;margin-left:6px;">
                        <label style="color:rgb(255,255,255);">
                            <strong>Status:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="Status" style="width:200px;color:rgb(0,0,0);" required>
                            <option value="For Sell" selected="">For Sell</option>
                            <option value="For Rent">For Rent</option>
                        </select>
                    </div>
                    <input class="form-control form-control-sm" type="text" name="Locality" placeholder="Locality" style="width:200px;margin-left:4px;color:rgb(0,0,0);" required>
                        <div class="form-group" style="width:200px;margin-left:447px;margin-top:-110px;margin-bottom:21px;">
                            <label style="margin-bottom:18px;color:rgb(255,255,255);">
                                <strong>District:</strong>
                            </label>
                            <select class="form-control form-control-sm" name="District" style="margin-top:-12px;width:200px;color:rgb(0,0,0);" required>
                                <option value="Kinondoni" selected>Kinondoni</option>
                                <option value="Ilala">Ilala</option>
                                <option value="Temeke">Temeke</option>
                                <option value="Kigamboni">Kigamboni</option>
                            </select>
                        </div>
                    <input class="form-control form-control-sm" type="number" min="1"  name="Price" placeholder="Price in Tsh" style="width:200px;margin-left:447px;margin-top:-4px;color:rgb(0,0,0);margin-bottom:0px;" required>
                        <div class="form-group" style="width:200px;margin-left:229px;margin-top:-111px;margin-bottom:178px;"><label style="color:rgb(255,255,255);">
                            <strong>City:</strong>
                        </label>
                            <select class="form-control form-control-sm" name="City" style="width:200px;color:rgb(0,0,0);">
                                <option value="Dar-es-Salaam" selected="">Dar-es-Salaam</option>
                            </select>
                        </div>
                        <input class="form-control form-control-sm" type="number" minlength="10" maxlength="13" name="Contact" placeholder="Contact" style="width:200px;margin-left:229px;margin-top:-162px;color:rgb(0,0,0);margin-bottom:44px;" required>
                            <input class="form-control form-control-sm" type="text" name="Area" placeholder="Area(Meter Square)" style="width:200px;margin-left:229px;margin-top:-33px;color:rgb(0,0,0);" required>
                            <label for="imageL" style="color:white"><b>Land photo: </b></label>
                                <input type="file"  name="imageL" style="width:200px;margin-left:20px;margin-top:20px;color:rgb(0,0,0);" required><br><br>
                            <div class="form-group" style="margin-left:6px;width:629px;">
                                <label style="color:rgb(255,255,255);">
                                    <strong>More Discription:</strong>
                                </label>
                                <textarea class="form-control" name="Description" maxlength="500" style="width:639px;height:137px;color:rgb(0,0,0);"required>
                                    
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
                            <?php endif ?>
                            
<!-- For godown images  --><?php if ($prop == 'godown'): ?>
                <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="includes/Uploadgodown.inc.php" method="post"
                style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:471px;margin-left:91px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Upload Your Godown Here...</strong>
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
                        <div class="form-group" style="width:200px;margin-left:229px;margin-top:-111px;margin-bottom:178px;">
                            <label style="color:rgb(255,255,255);">
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
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-40px;"><strong>Fill all the inputs!..</strong>
                                </p>';
                                    }
                                    if ($_GET['error'] == "invalidcontact"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-40px;"><strong>Invalid contact!...</strong>
                                </p>';
                                    }
                                    if ($_GET['error'] == "invalidprice"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-40px;"><strong>Invalid value for price!..</strong>
                                </p>';
                                    }
                                    if ($_GET['error'] == "invalidinputs"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-40px;"><strong>Invalid value for Area!...</strong>
                                </p>';
                                    }
                                    if ($_GET['error'] == "sqlerror"){
                                echo'<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-40px;"><strong>Sorry! System error,try again later..</strong>
                                </p>';
                                    }
                                } 
                            else if (isset($_GET['upload'])) {
                                if ($_GET['upload'] == "success"){
                                  echo '<p
                                }
                                class="text-center success" id="success" style="color:rgb(20,255,0);">
                                <strong>Your post is successful uploaded..</strong>
                            </p>';  
                                }
                        }                       
                            ?>

                                <div class="form-group" style="margin-left:-110px;">
                                    <button class="btn btn-primary active" type="submit" name="godown-Submit" data-bs-hover-animate="rubberBand" style="width:283px;margin-left:299px;margin-top:-7px;">
                                        <strong>Upload..</strong>
                                    </button>
                                </div>
                        </form> 
                            <?php endif ?>
                            
<!-- For hostel images  --><?php if ($prop == 'hostel'): ?>
                <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="includes/Uploadhostel.inc.php" method="post"
                style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:568px;margin-left:91px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Upload Your Hostel Here...</strong>
                    </h2>
                </div>
                <div class="form-group" style="width:200px;margin-left:6px;">
                    <label style="color:rgb(255,255,255);">
                        <strong>Status:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Status" style="width:200px;color:rgb(0,0,0);">
                        <option value="For Rent">For Rent</option>
                    </select>
                    <label
                        style="color:rgb(255,255,255);">
                        <strong>Fence Av:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Fence" style="width:200px;color:rgb(0,0,0);">
                        <option value="Yes" selected="">Yes</option>
                        <option value="No">No</option>
                    </select>
                        <label
                            style="color:rgb(255,255,255);">
                            <strong>City:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="City" style="width:200px;color:rgb(0,0,0);">
                            <option value="Dar-es-Salaam" selected="">Dar-es-Salaam</option>
                        </select>
                    </div>
                    <input class="form-control form-control-sm"
                    type="text" name="Locality" placeholder="Locality" style="width:200px;margin-left:4px;color:rgb(0,0,0);">
                <div class="form-group" style="width:200px;margin-left:447px;margin-top:-235px;margin-bottom:21px;">
                    <label style="margin-bottom:18px;color:rgb(255,255,255);">
                        <strong>Water Serv:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Water" style="margin-top:-12px;width:200px;color:rgb(0,0,0);">
                        <option value="Yes" selected="">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <label
                        style="color:rgb(255,255,255);">
                        <strong>Food Availabilty:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Food" style="width:200px;color:rgb(0,0,0);">
                        <option value="Inside Hostel" selected="">Inside Hostel</option>
                        <option value="Outside Hostel">Outside Hostel</option>
                    </select>
                        <label
                            style="color:rgb(255,255,255);">
                            <strong>District:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="District" style="width:200px;color:rgb(0,0,0);">
                            <option value="Kinondoni" selected="">Kinondoni</option>
                            <option value="Ilala">Ilala</option>
                            <option value="Temeke">Temeke</option>
                            <option value="Kigamboni">Kigamboni</option>
                        </select>
                    </div>
                <input
                    class="form-control form-control-sm" type="text" name="Price" placeholder="Price(Tsh) Per Month" style="width:200px;margin-left:447px;margin-top:-4px;color:rgb(0,0,0);margin-bottom:0px;">
                    <div class="form-group" style="width:200px;margin-left:229px;margin-top:-237px;margin-bottom:178px;">
                        <label style="color:rgb(255,255,255);">
                            <strong>Electricity Serv:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="Electric" style="width:200px;color:rgb(0,0,0);">
                            <option value="Yes" selected="">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label
                            style="color:rgb(255,255,255);">
                            <strong>Self-Contained:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="Self" style="width:200px;color:rgb(0,0,0);">
                            <option value="Yes" selected="">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <input
                        class="form-control form-control-sm" type="text" name="Contact" placeholder="Contact" style="width:200px;margin-left:229px;margin-top:-97px;color:rgb(0,0,0);">
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
                                echo '<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                <strong>Fill all the inputs!..</strong>
                            </p>';
                            }
                            if ($_GET['error'] == "invalidvalue"){
                                echo '<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                <strong>Invalid value for price!..</strong>
                            </p>';
                            }
                            if ($_GET['error'] == "invalidcontact"){
                                echo '<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                <strong>Invalid contact!...</strong>
                            </p>';
                            }
                            if ($_GET['error'] == "sqlerror"){
                                echo '<p class="text-center error" id="error" style="color:rgb(255,0,0);margin-top:-10px;">
                                <strong>Sorry! System error,try again later..</strong>
                            </p>';
                            }
                        }
                        else if (isset($_GET['upload'])) {
                            if ($_GET['upload'] == "success"){
                                echo '<p
                            class="text-center success" id="success" style="color:rgb(0,255,25);">
                            <strong>Your post is successful uploaded..</strong>
                        </p>';
                            }
                        }
                        ?>
                        
                            
                            <div class="form-group" style="margin-left:-110px;">
                                <button class="btn btn-primary active" type="submit" name="hostel-Submit" data-bs-hover-animate="rubberBand" style="width:283px;margin-left:299px;margin-top:-1px;">
                                    <strong>Upload..</strong>
                                </button>
                            </div>
            </form>
                            <?php endif ?>
            </div>
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