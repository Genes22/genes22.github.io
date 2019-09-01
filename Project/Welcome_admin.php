<?php
// Initialize the session
session_start();
require 'includes/dbh.inc.php';
 
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
    <title>Welcome admin</title>
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
            <div class="container"><a class="navbar-brand" href="#" style="font-family:Roboto, sans-serif;font-size:20px;">HOMESITE AND ESTATE AGENT ONLINE MENAGEMENT SYSTEM</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary active btn-block btn-sm float-left mr-auto" role="button" href="#" style="background-color:rgb(255,107,0);margin-left:430px;"><strong>BACK</strong></a></div>
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
                                class="dropdown-menu" role="menu"><a class="dropdown-item text-info" role="presentation" href="Uploadhouse_Admin.php" style="font-size:16px;"><strong>House</strong></a><a class="dropdown-item text-info" role="presentation" href="Uploadland_Admin.php" style="font-size:16px;"><strong>Land</strong></a>
                                <a
                                    class="dropdown-item text-info" role="presentation" href="Uploadgodown_Admin.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="Uploadhostel_Admin.php" style="font-size:16px;"><strong>Hostel</strong></a></div>
                </li>
                <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;color:#ffffff;"><strong>Search..</strong></a>
                    <div
                        class="dropdown-menu" role="menu"><a class="dropdown-item text-info" role="presentation" href="Searchhouse_Admin.php" style="font-size:16px;"><strong>House</strong></a><a class="dropdown-item text-info" role="presentation" href="Searchland_Admin.php" style="font-size:16px;"><strong>Land</strong></a>
                        <a
                            class="dropdown-item text-info" role="presentation" href="Searchgodown_Admin.php" style="font-size:16px;"><strong>Godown</strong></a><a class="dropdown-item text-info" role="presentation" href="Searchhostel_Admin.php" style="font-size:16px;"><strong>Hostel</strong></a></div>
            </li>
            </ul>
            <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout_Admin.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(0,0,0);margin-right:22px;"><strong>Sign Out</strong></button></form>
    </div>
    </div>
    </nav>
    </div>
     <div style="height:346px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive table-bordered" style="width:1089px;margin-top:3px;">
                        <?php
                        $id = $_SESSION['id'];
                        $result = $conn->prepare("SELECT * FROM admin WHERE idUsers = ?");
                        $result->execute(array($id));
                        $result->fetch();

                        if ($result->rowCount() > 0) {

                            echo '<table class="table table-bordered table-hover table-dark">';
                            echo '<thead>';
                                echo '<tr>';
                                    echo '<th style="width:190px;">First Name</th>';
                                    echo '<th>Last Name</th>';
                                    echo '<th>User Name</th>';
                                    echo '<th>E-mail</th>';
                                    echo '<th>Contact</th>';
                                echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';

                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                echo '<tr>';
                                    echo '<td style="width:105px;">'.$row['fName'].'<a class="btn btn-link active btn-sm" role="button" href="UpdatefNameadmin.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['lName'].'<a class="btn btn-link active btn-sm" role="button" href="UpdatelNameadmin.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['uName'].'<a class="btn btn-link active btn-sm" role="button" href="UpdateuNameadmin.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['uMail'].'<a class="btn btn-link active btn-sm" role="button" href="UpdateuMailadmin.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['uContact'].'<a class="btn btn-link active btn-sm" role="button" href="UpdateuContactadmin.php"><strong>Edit</strong></a></td>';
                                echo '</tr>';

                            echo '</tbody>';
                            }
                            echo '</table>';
                        }
                        ?>
                    </div>
                    <div style="margin-left:585px;margin-bottom:307px;margin-top:-327px;">
                        <h1 style="width:338px;font-size:31px;color:rgb(255,255,255);margin-top:332px;margin-left:-143px;">View my all post</h1>
                    </div>
                    <div style="margin-left:585px;margin-bottom:307px;margin-top:0px;width:500px;">
                        <div class="table-responsive" style="width:382px;margin-left:-214px;margin-top:-302px;">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th colspan="4" style="width:290px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Categories</th>
                                    </tr>
                                </thead>
                                <tbody style="width:268px;">
                                    <tr>
                                        <td style="width:-26px;">
                                            <form action="#" method="post"><button class="btn btn-primary active btn-sm" type="submit" name="searchh_all_submit" data-bs-hover-animate="pulse">HOUSE</button></form>
                                        </td>
                                        <td>
                                            <form action="#" method="post"><button class="btn btn-primary active btn-sm" type="submit" name="searchl_all_submit" data-bs-hover-animate="pulse">LAND</button></form>
                                        </td>
                                        <td>
                                            <form action="#" method="post"><button class="btn btn-primary active btn-sm" type="submit" name="searchg_all_submit" data-bs-hover-animate="pulse">GODOWN</button></form>
                                        </td>
                                        <td>
                                            <form action="#" method="post"><button class="btn btn-primary active btn-sm" type="submit" name="searchho_all_submit" data-bs-hover-animate="pulse">HOSTEL</button></form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h1 style="font-size:25px;margin-left:251px;color:rgb(255,255,255);">RESULT</h1>
    </div>

    <div>
        <div class="table-responsive" style="background-color:#ffffff;color:rgb(0,0,0);">

           <div>
        <div class="table-responsive" style="background-color:#ffffff;color:rgb(0,0,0);">

            <?php
            if (isset($_POST['searchh_all_submit'])) {
                $house =$conn->prepare("SELECT Id, Status, Bedrooms, Bathrooms, Kitchens, Sittingrooms, Garages, Location, Price, Contact, Discription FROM houses;");
                $house->execute();
                $house->fetch(PDO::FETCH_ASSOC);

                if ($house->rowCount() > 0) {
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
            while ($row = $house->fetch(PDO::FETCH_ASSOC)) {
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
            ?>

            <?php
            if (isset($_POST['searchl_all_submit'])) {
                $land =$conn->prepare("SELECT Id, Status, Location, Price, Contact, Area, Discription FROM land");
                $land->execute();
                $land->fetch(PDO::FETCH_ASSOC);
                if ($land->rowCount() > 0) {
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
            while ($row = $land->fetch(PDO::FETCH_ASSOC)) {
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
            ?>

            <?php
           if (isset($_POST['searchg_all_submit'])) {
                $godown = $conn->prepare("SELECT Id, Status, Location, Price, Contact, Area, Discription FROM godown");
                $godown->execute();
                $godown->fetch(PDO::FETCH_ASSOC);
                if ($godown->rowCount() > 0) {
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
            while ($row = $godown->fetch(PDO::FETCH_ASSOC)) {
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

            ?>
            <?php
           if (isset($_POST['searchho_all_submit'])) {
                $hostel = $conn->prepare("SELECT Id, Water, Electricity, Locality, Price, Contact, Discription FROM hostel");
                $hostel->execute();
                $hostel->fetch(PDO::FETCH_ASSOC);
                if ($hostel->rowCount() > 0) {
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
            while ($row = $hostel->fetch(PDO::FETCH_ASSOC)) {
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
            ?>
    <div class="footer-dark" style="background-color:rgb(0,0,0);">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-whatsapp-outline">
                            
                        </i>
                    </a>
                    <a href="https://www.facebook.com/pg/Seven-estate-Agent-378672162603797/videos/" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-facebook">
                            
                        </i>
                    </a>
                    <a href="#" data-bs-hover-animate="rubberBand">
                        <i class="icon ion-social-instagram">
                            
                        </i>
                    </a>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>