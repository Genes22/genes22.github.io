<?php
// Initialize the session
session_start();
require 'includes/dbh.inc.php';
 
// Check if the user is already logged in, if no then redirect him to signin page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: Signin.php");
  exit;
}
if (isset($_GET['prop'])) {
   $property = $_GET['prop']; 
}else{
    $property = 'house';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searchhouse</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
 <div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(90,125,251);">
        <div class="container"><a class="navbar-brand" href="welcome-user.php" style="font-family:Roboto, sans-serif;font-size:20px;">HOMESITE AND ESTATE AGENT ONLINE MENAGEMENT SYSTEM</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</div>
<div style="color:rgb(254,254,254);">
    <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(177,77,71);">
        <div class="container-fluid"><a class="navbar-brand" href="search.php" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;width:217px;height:106px;background-color:#ffffff;background-image:url(&quot;assets/img/imagess.png&quot;);"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="welcome-user.php" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>Home</strong></a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-size:17px;color:#ffffff;font-family:Alike, serif;"><strong>Upload..</strong></a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item text-info" role="presentation" href="upload.php?prop=house" style="font-size:16px;"><strong>House</strong></a>
                            <a class="dropdown-item text-info" role="presentation" href="upload.php?prop=land" style="font-size:16px;"><strong>Land</strong></a>
                            <a class="dropdown-item text-info" role="presentation" href="upload.php?prop=godown" style="font-size:16px;"><strong>Godown</strong></a>
                            <a class="dropdown-item text-info" role="presentation" href="upload.php?prop=hostel" style="font-size:16px;"><strong>Hostel</strong></a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;color:#ffffff;"><strong>Search..</strong></a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item text-info" role="presentation" href="search.php?prop=house" style="font-size:16px;"><strong>House</strong></a>
                            <a class="dropdown-item text-info" role="presentation" href="search.php?prop=land" style="font-size:16px;"><strong>Land</strong></a>
                            <a class="dropdown-item text-info" role="presentation" href="search.php?prop=godown" style="font-size:16px;"><strong>Godown</strong></a>
                            <a class="dropdown-item text-info" role="presentation" href="search.php?prop=hostel" style="font-size:16px;"><strong>Hostel</strong></a>
                        </div>
                    </li>
                </ul>
                <a class="btn btn-primary active btn-sm float-right visible" role="button" href="Change_password.php" data-bs-hover-animate="pulse" style="margin-top:-3px;width:155px;background-color:rgb(26,108,143);margin-right:15px;"><strong>CHANGE PASSWORD</strong></a>
                <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(0,0,0);margin-right:22px;"><strong>Sign Out</strong></button></form>
            </div>
        </div>
    </nav>
</div>

<!-- House search -->
<?php if ($property == 'house'): ?>
    <form action="search.php?prop=house" method="post">
        <div class="form-group">
            <button class="btn btn-primary active btn-sm" type="submit" name="search_all_submit" data-bs-hover-animate="rubberBand" style="margin-top:14px;margin-left:605px;">
                <strong>Search for all available posts..</strong>
            </button>
        </div>
    </form>

    <div class="container" style="padding-left:9px;width:756px;">
        <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="search.php?prop=house" method="post" style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:316px;margin-left:91px;margin-bottom:132px;">
            <div class="form-group" style="margin-left:-62px;">
                <h2 style="margin-left:195px;color:rgb(255,255,255);">
                    <strong>Search For Houses Here...</strong>
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

    <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post">
        <button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-446px;width:76px;background-color:rgb(255,90,90);margin-right:22px;">
        <strong>Sign Out</strong></button>
    </form>
    </div>

    <div>
        <div class="table-responsive" style="background-color:#ffffff;color:rgb(0,0,0);">

            <?php
            if (isset($_POST['search_all_submit'])) {
                $search = $conn->prepare("SELECT Id, Status, Bedrooms, Bathrooms, Kitchens, Sittingrooms, Garages, Location, Price, Contact, Discription FROM houses");
                $search->execute();
                $search->fetch(PDO::FETCH_ASSOC);

                if ($search->rowCount() > 0) {
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
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
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
                    echo '<td>+255777222444</td>';
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
                $Status = clean($_POST['Status']);
                $Kitchens = clean($_POST['Kitchens']);
                $Bathrooms = clean($_POST['Bathrooms']);
                $City = clean($_POST['City']);
                $Locality = clean($_POST['Locality']);
                $District = clean($_POST['District']);
                $Bedrooms = clean($_POST['Bedrooms']);
                $Garages = clean($_POST['Garages']);
                $Sittingrooms = clean($_POST['Sittingrooms']);

                $search = $conn->prepare("SELECT * FROM houses WHERE Status = '" . $Status ."' AND Kitchens = '". $Kitchens. "' AND Bathrooms = '". $Bathrooms ."' AND Location = '". $Locality ."'  AND City = '". $City ."'  AND District = '". $District. "' AND Bedrooms = '". $Bedrooms. "' AND Garages = '". $Garages ."' AND Sittingrooms = '". $Sittingrooms ."'");
                $search->execute();
                $search->fetch(PDO::FETCH_ASSOC);

                if ($search->rowCount() > 0) {
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
            while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
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
                    echo '<td>+255777222444</td>';
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
<?php endif ?> <!-- End of search house -->


<!-- Search Land section -->
<?php if ($property == 'land'): ?>
    <form action="search.php?prop=land" method="post">
            <div class="form-group"><button class="btn btn-primary active btn-sm" type="submit" name="search_all_submit" data-bs-hover-animate="rubberBand" style="margin-left:620px;margin-bottom:-6px;width:204px;margin-top:41px;">
                <strong>Search for all post available..</strong>
            </button>
        </div>
        </form>

        <div class="container" style="padding-left:9px;width:756px;">
            <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="search.php?prop=land" method="post" enctype="multipart/form-data"
                style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:234px;margin-left:91px;margin-bottom:132px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Search For Land Here...</strong>
                    </h2>
                </div>
                <div class="form-group" style="width:200px;margin-left:6px;">
                    <label style="color:rgb(255,255,255);">
                        <strong>Status:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Status" style="width:200px;color:rgb(0,0,0);"><option value="For Sell" selected="">For Sell</option>
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
                            class="form-control form-control-sm" type="text" name="Area" placeholder="Area(Meter Square)" style="margin-top:15px;color:rgb(0,0,0);"></div>
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

    <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post">
        <button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-364px;width:76px;background-color:rgb(255,90,90);margin-right:22px;">
            <strong>Sign Out</strong>
        </button>
    </form>
    </div>

    <?php
            if (isset($_POST['search_all_submit'])) {

                require 'includes/dbh.inc.php';

                $sql = "SELECT Id, Status, Location, Price, Contact, Area, Discription FROM land;";
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


                $sql = "SELECT * FROM land WHERE Status = '" . $Status ."' AND Location = '". $Locality. "' AND City = '". $City ."' AND District = '". $District ."'  AND Area<= '". $Area ."';";
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
<?php endif ?> <!-- End of search land -->


<!-- Search godown section -->
<?php if ($property == 'godown'): ?>
    <form action="search.php?prop=godown" method="post">
            <div class="form-group"><button class="btn btn-primary active btn-sm" type="submit" name="search_all_submit" data-bs-hover-animate="rubberBand" style="margin-left:620px;margin-bottom:-6px;width:204px;margin-top:41px;"><strong>Search for all post available.</strong>.</button></div>
        </form>

        <div class="container" style="padding-left:9px;width:756px;">
            <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="search.php?prop=godown" method="post" style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:234px;margin-left:91px;margin-bottom:132px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Search For Godowns Here...</strong>
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
<?php endif ?> <!-- End of search godown -->


<!-- Search hostel section -->
<?php if ($property == 'hostel'): ?>
    <form action="search.php?prop=hostel" method="post">
            <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit" name="search_all_submit" data-bs-hover-animate="rubberBand" style="margin-bottom:-604px;margin-left:623px;">
                    <strong>Search for all available posts..</strong>
                </button>
            </div>
        </form>

        <div class="container" style="padding-left:9px;width:756px;">
            <form class="flex-shrink-1 align-items-center flex-sm-shrink-1 align-items-sm-center align-content-sm-center flex-md-shrink-1 align-items-md-center align-content-md-center" action="search.php?prop=hostel" method="post" style="background-color:rgba(0,0,0,0.37);width:654px;margin-top:11px;height:316px;margin-left:91px;margin-bottom:132px;">
                <div class="form-group" style="margin-left:-62px;">
                    <h2 style="margin-left:195px;color:rgb(255,255,255);">
                        <strong>Search For Hostel Here...</strong>
                    </h2>
                </div>
                <div class="form-group" style="width:200px;margin-left:6px;">
                    <label style="color:rgb(255,255,255);">
                        <strong>Status:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Status" style="width:200px;color:rgb(0,0,0);">
                        <option value="For Rent" selected="">For Rent</option>
                        <!--<option value="For Rent">For Rent</option>-->
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
                    style="width:200px;margin-left:447px;margin-top:-140px;margin-bottom:21px;">
                    <label style="margin-bottom:18px;color:rgb(255,255,255);">
                        <strong>Electricity serv:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Electricity" style="margin-top:-12px;width:200px;color:rgb(0,0,0);">
                        <option value="Yes" selected="">Yes</option>
                        <option value="No">No</option>
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
                    class="form-group" style="width:200px;margin-left:229px;margin-top:-148px;margin-bottom:178px;">
                    <label style="color:rgb(255,255,255);">
                        <strong>Water serv:</strong>
                    </label>
                    <select class="form-control form-control-sm" name="Water" style="width:200px;color:rgb(0,0,0);">
                        <option value="Yes" selected="">Yes</option>
                        <option value="No">No</option>
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

    <form class="flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post">
        <button class="btn btn-primary active btn-sm float-right" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-446px;width:76px;background-color:rgb(255,90,90);margin-right:22px;">
            <strong>Sign Out</strong>
        </button>
    </form>
    </div>
    <div>
        <div class="table-responsive" style="background-color:#ffffff;color:rgb(0,0,0);">

             <?php
            if (isset($_POST['search_all_submit'])) {

                require 'includes/dbh.inc.php';

                $sql = "SELECT Id, Water, Electricity, Locality, Price, Contact, Discription FROM hostel;";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>WaterServ</th>';
                    echo '<th>ElectricityServ</th>';
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
                    echo '<td>'.$row['Water'].'</td>';
                    echo '<td>'.$row['Electricity'].'</td>';
                    echo '<td>'.$row['Locality'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>+255777222444</td>';
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
                $Water = $_POST['Water'];
                $Electricity = $_POST['Electricity'];
                $City = $_POST['City'];
                $Locality = $_POST['Locality'];
                $District = $_POST['District'];

                $sql = "SELECT * FROM hostel WHERE Status = '" . $Status ."' AND Electricity = '". $Electricity. "' AND Water = '". $Water ."' AND Locality = '". $Locality ."'  AND City = '". $City ."'  AND District = '". $District. "';";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Ref#</th>';
                    echo '<th>WaterServ</th>';
                    echo '<th>ElectricityServ</th>';
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
                    echo '<td>'.$row['Water'].'</td>';
                    echo '<td>'.$row['Electricity'].'</td>';
                    echo '<td>'.$row['Locality'].'</td>';
                    echo '<td>'.$row['Price'].'</td>';
                    echo '<td>+255777222444</td>';
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
                    echo '<p class="text-center" style="color:rgb(255,0,0);font-size:21px;">
                          <strong>Oops!..No Result Found!..</strong></p>';
                }
            }             
            ?>
        </div>
    </div>
<?php endif ?> <!-- End of search hostel -->

<div class="clear" style="clear: both;"></div>
<div class="footer-dark" style="background-color:rgb(0,0,0);">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col item social">
                    <a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a>
                    <a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a>
                    <a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                    <a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
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