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
    <title>User_Accounts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
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
                        <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-size:17px;color:rgb(140,140,140);font-family:Alike, serif;"><strong>Upload..</strong></a>
                            <div
                                class="dropdown-menu" role="menu"><a class="dropdown-item text-info" role="presentation" href="Uploadhouse.php" style="font-size:16px;"><strong>House</strong></a><a class="dropdown-item text-info" role="presentation" href="Uploadland.php" style="font-size:16px;"><strong>Land</strong></a>
                                <a
                                    class="dropdown-item text-info" role="presentation" href="Uploadgodown.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="Uploadhostel.php" style="font-size:16px;"><strong>Hostel</strong></a></div>
                </li>
                <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;"><strong>Search..</strong></a>
                    <div class="dropdown-menu"
                        role="menu"><a class="dropdown-item text-info" role="presentation" href="Searchhouse.php" style="font-size:16px;"><strong>House</strong></a><a class="dropdown-item text-info" role="presentation" href="Searcland.php" style="font-size:16px;"><strong>Land</strong></a>
                        <a
                            class="dropdown-item text-info" role="presentation" href="Searchgodown.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="Searchhostel.php" style="font-size:16px;"><strong>Hostel</strong></a></div>
                </li>
                </ul><a class="btn btn-primary active btn-sm mx-auto" role="button" href="Welcome_Admin.php" data-bs-hover-animate="pulse" style="background-color:#01a386;color:rgb(255,255,255);font-size:21px;width:83px;height:33px;margin-top:-3px;"><strong>Back</strong><i class="typcn typcn-arrow-back-outline" style="color:rgb(255,255,255);"></i></a>
                <form
                    class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout_Admin.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(254,86,86);margin-right:22px;"><strong>Sign Out</strong></button></form>
            </div>
    </div>
    </nav>
    </div>
    <div class="projects-horizontal" style="background-color:rgba(255,255,255,0);">
        <div class="container" style="background-color:rgba(255,0,0,0);">
            <div class="intro" style="background-color:rgba(255,255,255,0);">
                <h2 class="text-center" style="background-color:rgba(133,122,122,0);color:#ffffff;">List Of All Users Registered To Your System</h2>
            </div>
        </div>
    </div>
    <div class="projects-horizontal" style="background-color:rgba(255,255,255,0);">
        <div class="container">
        <div>
            <div class="table-responsive table-bordered">

                <?php



                require 'includes/dbh.inc.php';

                $sql = "SELECT * FROM users;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0){
                   echo '<table class="table table-striped table-dark table-sm">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th>User ID</th>';
                            echo '<th>First Name</th>';
                            echo '<th>Last Name</th>';
                            echo '<th>User Name</th>';
                            echo '<th>E-mail</th>';
                            echo '<th>Phone#</th>';
                            echo '<th>Action</th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($row = mysqli_fetch_assoc($result)){
                        echo '<tr>';
                            echo '<td>'.$row['idUsers'].'</td>';
                            echo '<td>'.$row['fName'].'</td>';
                            echo '<td>'.$row['lName'].'</td>';
                            echo '<td>'.$row['uName'].'</td>';
                            echo '<td>'.$row['uMail'].'</td>';
                            echo '<td>'.$row['uContact'].'</td>';
                            echo '<td style="width:55px;">
                                    <a class="btn btn-primary active btn-block" role="button" href="includes/Delete_User.inc.php?Delete='.$row['idUsers'].'"  style="background-color:#000000;">
                                        <i class="fa fa-trash-o" data-bs-hover-animate="rubberBand" style="color:rgb(255,0,0);">
                                </i>
                            </a>
                        </td>';
                        echo '</tr>';
                    echo '</tbody>';
                
                }
                echo '</table>';
            }
                ?> 


            </div>
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
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
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