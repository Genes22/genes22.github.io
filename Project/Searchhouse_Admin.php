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
    <title>Searchhouse</title>
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
        <form action="" method="post">
            <div class="form-group">
                <button class="btn btn-primary active btn-sm" type="submit" name="search_all_submit" data-bs-hover-animate="rubberBand" style="margin-top:14px;margin-left:605px;">
                    <strong>Search for all available posts..</strong>
                </button>
            </div>
        </form>

        <div class="container" style="padding-left:9px;width:756px;">
            <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="" method="post" style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:316px;margin-left:91px;margin-bottom:132px;">
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
                    <label
                        style="color:rgb(255,255,255);">
                        <strong>Kitchens:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Kitchens" style="width:200px;color:rgb(0,0,0);">
                        <option value="Any" selected="">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                        <label
                            style="color:rgb(255,255,255);">
                            <strong>City:</strong>
                        </label>
                        <select class="form-control form-control-sm" name="City" style="width:200px;color:rgb(0,0,0);">
                            <option value="Dar-es-Salaam" selected="">Dar-es-Salaam</option>
                        </select>
                    </div>
                <div class="form-group"
                    style="width:200px;margin-left:447px;margin-top:-206px;margin-bottom:21px;">
                    <label style="margin-bottom:18px;color:rgb(255,255,255);">
                        <strong>Bathrooms:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Bathrooms" style="margin-top:-12px;width:200px;color:rgb(0,0,0);">
                        <option value="Any" selected="">Any</option>
                        <option value="1">1</option>
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
                        <strong>Garages:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Garages" style="width:200px;color:rgb(0,0,0);">
                        <option value="Any" selected="">Any</option>
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
                <div
                    class="form-group" style="width:200px;margin-left:229px;margin-top:-209px;margin-bottom:178px;">
                    <label style="color:rgb(255,255,255);">
                        <strong>Bedrooms:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Bedrooms" style="width:200px;color:rgb(0,0,0);">
                        <option value="Any" selected="">Any</option>
                        <option value="1">1</option>
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
                        <strong>Sittingrooms:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Sittingrooms" style="width:200px;color:rgb(0,0,0);">
                        <option value="Any" selected="">Any</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
        <input
            class="form-control form-control-sm" type="text" name="Locality" placeholder="Locality" style="width:200px;margin-left:229px;margin-top:-145px;color:rgb(0,0,0);">
            <div class="form-group" style="margin-left:-110px;margin-top:16px;">
                <button class="btn btn-primary active" type="submit" name="search_specific_submit" data-bs-hover-animate="rubberBand" style="width:283px;margin-left:299px;margin-top:10px;">
                    <strong>Search..</strong>
                </button>
            </div>
            </form>
    </div>

    <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout_Admin.inc.php" method="post">
        <button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-446px;width:76px;background-color:rgb(255,90,90);margin-right:22px;"
        <strong>Sign Out</strong></button>
    </form>
    </div>

    <div>
        <div class="table-responsive" style="background-color:#ffffff;color:rgb(0,0,0);">

            <?php
            if (isset($_POST['search_all_submit'])) {

                require 'includes/dbh.inc.php';

                $sql = "SELECT Id, Status, Bedrooms, Bathrooms, Kitchens, Sittingrooms, Garages, Location, Price, Contact, Discription FROM houses;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>Status</th>';
                    echo '<th>Bedroom</th>';
                    echo '<th>Bathroom</th>';
                    echo '<th>Kitchen</th>';
                    echo '<th>Sittingroom</th>';
                    echo '<th>Garage</th>';
                    echo '<th>Locality</th>';
                    echo '<th>Price</th>';
                    echo '<th>Contact</th>';
                    echo '<th>Action</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo '<td>'.$row['Id'].'</td>';
                    echo '<td>'.$row['Status'].'</td>';
                    echo '<td>'.$row['Bedrooms'].'</td>';
                    echo '<td>'.$row['Bathrooms'].'</td>';
                    echo '<td>'.$row['Kitchens'].'</td>';
                    echo '<td>'.$row['Sittingrooms'].'</td>';
                    echo '<td>'.$row['Garages'].'</td>';
                    echo '<td>'.$row['Location'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>'.$row['Contact'].'</td>';
                    echo '<td><a class="btn btn-primary active btn-block" role="button" href="includes/Delete_house.inc.php?Delete='.$row['Id'].'" data-bs-hover-animate="pulse" style="background-color:rgb(0,0,0);font-size:15px;color:rgb(255,0,0);"><strong>DELETE</strong></a></td>';
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
                $Kitchens = $_POST['Kitchens'];
                $Bathrooms = $_POST['Bathrooms'];
                $City = $_POST['City'];
                $Locality = $_POST['Locality'];
                $District = $_POST['District'];
                $Bedrooms = $_POST['Bedrooms'];
                $Garages = $_POST['Garages'];
                $Sittingrooms = $_POST['Sittingrooms'];

                $sql = "SELECT * FROM houses WHERE Status = '" . $Status ."' AND Kitchens = '". $Kitchens. "' AND Bathrooms = '". $Bathrooms ."' AND Location = '". $Locality ."'  AND City = '". $City ."'  AND District = '". $District. "' AND Bedrooms = '". $Bedrooms. "' AND Garages = '". $Garages ."' AND Sittingrooms = '". $Sittingrooms ."';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>Status</th>';
                    echo '<th>Bedroom</th>';
                    echo '<th>Bathroom</th>';
                    echo '<th>Kitchen</th>';
                    echo '<th>Sittingroom</th>';
                    echo '<th>Garage</th>';
                    echo '<th>Locality</th>';
                    echo '<th>Price</th>';
                    echo '<th>Contact</th>';
                    #echo '<th>Column 7</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                    echo '<td>'.$row['Id'].'</td>';
                    echo '<td>'.$row['Status'].'</td>';
                    echo '<td>'.$row['Bedrooms'].'</td>';
                    echo '<td>'.$row['Bathrooms'].'</td>';
                    echo '<td>'.$row['Kitchens'].'</td>';
                    echo '<td>'.$row['Sittingrooms'].'</td>';
                    echo '<td>'.$row['Garages'].'</td>';
                    echo '<td>'.$row['Location'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>'.$row['Contact'].'</td>';
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
                          <strong>Oops!..No Result Found!..</strong></p>';
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
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                        <a
                            href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
                    </div>
                </div>
                <p class="copyright">TeflonDon© 2019</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>