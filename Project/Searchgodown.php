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
    <title>Searchgodown</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
     <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(90,125,251);">
            <div class="container"><a class="navbar-brand" href="#" style="font-family:Roboto, sans-serif;font-size:20px;">HOMESITE AND ESTATE AGENT ONLINE MENAGEMENT SYSTEM</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary active btn-block btn-sm float-left mr-auto" role="button" href="Welcome_user.php" style="background-color:rgb(255,107,0);margin-left:430px;"><strong>BACK</strong></a></div>
    </div>
    </nav>
    </div>
    <div style="color:rgb(254,254,254);">
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(177,77,71);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;width:217px;height:106px;background-color:#ffffff;background-image:url(&quot;assets/img/imagess.png&quot;);"></a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>Home</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="About.html" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>About Us</strong></a></li>
                       <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="Contact.html" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>Contact Us</strong></a></li>-->
                        <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-size:17px;color:#ffffff;font-family:Alike, serif;"><strong>Upload..</strong></a>
                            <div
                                class="dropdown-menu" role="menu"><a class="dropdown-item text-info" role="presentation" href="Uploadhouse.php" style="font-size:16px;"><strong>House</strong></a><a class="dropdown-item text-info" role="presentation" href="Uploadland.php" style="font-size:16px;"><strong>Land</strong></a>
                                <a
                                    class="dropdown-item text-info" role="presentation" href="Uploadgodown.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="Uploadhostel.php" style="font-size:16px;"><strong>Hostel</strong></a></div>
                </li>
                <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;color:#ffffff;"><strong>Search..</strong></a>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item text-info" role="presentation" href="Searchhouse.php" style="font-size:16px;"><strong>House</strong></a><a class="dropdown-item text-info" role="presentation" href="Searcland.php" style="font-size:16px;"><strong>Land</strong></a>
                        <a
                            class="dropdown-item text-info" role="presentation" href="Searchgodown.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="Searchhostel.php" style="font-size:16px;"><strong>Hostel</strong></a></div>
            </li>
            </ul>
            <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(0,0,0);margin-right:22px;"><strong>Sign Out</strong></button></form>
    </div>
    </div>
    </nav>
    </div>
        <form action="" method="post">
            <div class="form-group"><button class="btn btn-primary active btn-sm" type="submit" name="search_all_submit" data-bs-hover-animate="rubberBand" style="margin-left:620px;margin-bottom:-6px;width:204px;margin-top:41px;"><strong>Search for all post available.</strong>.</button></div>
        </form>

        <div class="container" style="padding-left:9px;width:756px;">
            <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="" method="post" style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:234px;margin-left:91px;margin-bottom:132px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Search For Property Here...</strong>
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
                    class="form-control form-control-sm" type="text" name="Locality" placeholder="Locality" style="width:200px;padding-right:8px;padding-top:4px;margin-left:6px;color:rgb(0,0,0);">
                    <div class="form-group" style="width:200px;margin-left:447px;margin-top:-111px;margin-bottom:21px;">
                        <label style="color:rgb(255,255,255);">
                            <strong>District:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="District" style="width:200px;color:rgb(0,0,0);">
                            <option value="Kinondoni" selected="">Kinondoni</option>
                            <option value="Ilala">Ilala</option>
                            <option value="Temeke">Temeke</option>
                            <option value="Kigamboni">Kigamboni</option>
                        </select>
                        <input
                            class="form-control form-control-sm" type="text" name="Area" placeholder="Area(Meter Square)" style="margin-top:15px;color:rgb(0,0,0);">
                        </div>
                    <div class="form-group" style="width:200px;margin-left:229px;margin-top:-130px;margin-bottom:178px;">
                        <label style="color:rgb(255,255,255);">
                            <strong>City:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="City" style="width:200px;color:rgb(0,0,0);">
                            <option value="Dar-es-Salaam" selected="">Dar-es-Salaam</option>
                        </select>
                    </div>
                    <div
                        class="form-group" style="margin-left:-110px;margin-top:-118px;">
                        <button class="btn btn-primary active" type="submit" name="search_specific_submit" data-bs-hover-animate="rubberBand" style="width:283px;margin-left:299px;margin-top:10px;">
                            <strong>Search..</strong>
                        </button>
                    </div>
        </form>
    </div>
    <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-364px;width:76px;background-color:rgb(255,90,90);margin-right:22px;"><strong>Sign Out</strong></button></form>
    </div>
    <div>
        <div class="table-responsive" style="color:rgb(0,0,0);background-color:#ffffff;">
            <?php
            if (isset($_POST['search_all_submit'])) {

                require 'includes/dbh.inc.php';

                $sql = "SELECT Id, Status, Location, Price, Contact, Area, Discription FROM godown;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>Status</th>';
                    echo '<th>Locality</th>';
                    echo '<th>Price</th>';
                    echo '<th>Contact</th>';
                    echo '<th>Area(M<sup>2</sup>)</th>';
                    #echo '<th>Column 7</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo '<td>'.$row['Id'].'</td>';
                    echo '<td>'.$row['Status'].'</td>';
                    echo '<td>'.$row['Location'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>+255777222444</td>';
                    echo '<td>'.$row['Area'].'</td>';
                    #echo '<td>Cell 2</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td colspan="7" style="color:rgb(255,255,255);">'.$row['Discription'].'</td>';
                echo '</tr>';
            echo '</tbody>';
            }
                
        echo '</table>';
                }
            }

            
            if (isset($_POST['search_specific_submit'])) {

                require 'includes/dbh.inc.php';

                $Status = $_POST['Status'];
                $Locality = $_POST['Locality'];
                $District = $_POST['District'];
                $Area = $_POST['Area'];
                $City = $_POST['City'];


                $sql = "SELECT * FROM godown WHERE Status = '" . $Status ."' AND Location = '". $Locality. "' AND City = '". $City ."' AND District = '". $District ."'  AND Area<= '". $Area ."';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>Status</th>';
                    echo '<th>Locality</th>';
                    echo '<th>Price</th>';
                    echo '<th>Contact</th>';
                    echo '<th>Area(M<sup>2</sup>)</th>';
                    #echo '<th>Column 7</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo '<td>'.$row['Id'].'</td>';
                    echo '<td>'.$row['Status'].'</td>';
                    echo '<td>'.$row['Location'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>+255777222444</td>';
                    echo '<td>'.$row['Area'].'</td>';
                    #echo '<td>Cell 2</td>';
                echo '</tr>';
                echo '<tr>';
                    echo '<td colspan="7" style="color:rgb(255,255,255);">'.$row['Discription'].'</td>';
                echo '</tr>';
            echo '</tbody>';
            }
                
        echo '</table>';
                }
                else {
                    echo '<p class="text-center" style="color:rgb(255,0,0);font-size:20px;">
        <strong>Oops!...No Result Found!..</strong></p>';
                }
            }

            ?>
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
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-whatsapp-outline">
                            
                        </i>
                    </a>
                    <a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-facebook">
                            
                        </i>
                    </a>
                    <a href="#" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-instagram"></i></a>
                        <a
                            href="#" data-bs-hover-animate="rubberBand">
                            <i class="icon ion-social-twitter">
                                
                            </i>
                        </a>
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