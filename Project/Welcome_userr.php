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
    <title>Welcome_user</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>


<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(90,125,251);">
            <div class="container"><a class="navbar-brand" href="#" style="font-family:Roboto, sans-serif;font-size:20px;">HOMESITE AND ESTATE AGENT ONLINE MENAGEMENT SYSTEM</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1"></div>
    </div>
    </nav>
    </div>
    <div style="color:rgb(254,254,254);">
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(177,77,71);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;width:217px;height:106px;background-color:#ffffff;background-image:url(&quot;assets/img/imagess.png&quot;);"></a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="About.html" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>About Us</strong></a></li>
                        <!--<li class="nav-item" role="presentation"><a class="nav-link" href="Contact.html" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>Contact Us</strong></a></li>-->
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
            <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(0,0,0);margin-right:22px;"><strong>Sign Out</strong></button></form>
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
                        require 'includes/dbh.inc.php';

                        $id = $_SESSION['id'];
                        $sql = "SELECT * FROM users WHERE idUsers = $id;";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {

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

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                    echo '<td style="width:105px;">'.$row['fName'].'<a class="btn btn-link active btn-sm" role="button" href="UpdatefName.inc.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['lName'].'<a class="btn btn-link active btn-sm" role="button" href="UpdatelName.inc.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['uName'].'<a class="btn btn-link active btn-sm" role="button" href="UpdateuName.inc.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['uMail'].'<a class="btn btn-link active btn-sm" role="button" href="UpdateuMail.inc.php"><strong>Edit</strong></a></td>';

                                    echo '<td>'.$row['uContact'].'<a class="btn btn-link active btn-sm" role="button" href="UpdatefContact.inc.php"><strong>Edit</strong></a></td>';
                                echo '</tr>';

                            echo '</tbody>';
                            }
                            echo '</table>';
                        }
                        ?>
                         
                    </div>           
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
                                            <form action="Accsearchland.inc.php" method="post"><button class="btn btn-primary active btn-sm" type="submit" data-bs-hover-animate="pulse">HOUSE</button></form>
                                        </td>
                                        <td>
                                            <form action="Accsearchland.inc.php" method="post"><button class="btn btn-primary active btn-sm" type="submit" data-bs-hover-animate="pulse">LAND</button></form>
                                        </td>
                                        <td>
                                            <form action="Accsearchgodown.inc.php" method="post"><button class="btn btn-primary active btn-sm" type="submit" data-bs-hover-animate="pulse">GODOWN</button></form>
                                        </td>
                                        <td>
                                            <form action="Accsearchhostel.inc.php" method="post"><button class="btn btn-primary active btn-sm" type="submit" data-bs-hover-animate="pulse">HOSTEL</button></form>
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
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<!--<body style="background-image:url(&quot;assets/img/home.jpg&quot;);">
    <div>
        <nav class="navbar navbar-dark navbar-expand-md sticky-top navigation-clean-button" style="background-color:rgb(0,0,0);">
            <div class="container-fluid"><a class="navbar-brand" href="#" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;background-image:url(&quot;assets/img/Logo.jpg&quot;);width:217px;height:106px;"></a><button class="navbar-toggler" data-toggle="collapse"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>About Us</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" data-bs-hover-animate="tada" style="color:rgba(255,255,255,0.49);"><strong>Contact Us</strong></a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-size:17px;color:rgb(140,140,140);font-family:Alike, serif;">
                                <strong>Upload..</strong>
                            </a>
                            <div
                                class="dropdown-menu" role="menu">
                                <a class="dropdown-item text-info" role="presentation" href="Uploadhouse.php" style="font-size:16px;">
                                    <strong>House</strong>
                                </a>
                                <a class="dropdown-item text-info" role="presentation" href="Uploadland.php" style="font-size:16px;">
                                    <strong>Land</strong>
                                </a>
                                <a
                                    class="dropdown-item text-info" role="presentation" href="Uploadgodown.php" style="font-size:16px;">
                                    <strong>Godown</strong>
                                </a>
                                <a class="dropdown-item text-info" role="presentation" href="Uploadhostel.php" style="font-size:16px;">
                                    <strong>Hostel</strong>
                                </a>
                            </div>
                </li>

                <li class="dropdown"><a class="dropdown-toggle nav-link text-monospace dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse" style="font-family:Alike, serif;font-size:18px;">
                    <strong>Search..</strong>
                </a>
                    <div class="dropdown-menu"
                        role="menu">
                        <a class="dropdown-item text-info" role="presentation" href="Searchhouse.php" style="font-size:16px;">
                            <strong>House</strong>
                        </a>
                        <a class="dropdown-item text-info" role="presentation" href="Searchland.php" style="font-size:16px;">
                            <strong>Land</strong>
                        </a>
                        <a
                            class="dropdown-item text-info" role="presentation" href="Searchgodown.php" style="font-size:16px;">
                            <strong>Godown</strong>
                        </a>
                        <a class="dropdown-item text-info" role="presentation" href="Searchhostel.php" style="font-size:16px;">
                            <strong>Hostel</strong>
                        </a>
                    </div>
                </li>
                </ul>
                <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" name="submit-signout" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(254,86,86);margin-right:22px;"><strong>Sign Out</strong></button></form>
            </div>
    </div>
    </nav>
    </div>
    <div class="projects-horizontal">
        <div class="container" style="background-color:#ffffff;">
            <div class="intro">
                <h2 class="text-center">Most visited properties</h2>
                <p class="text-center">List of all most visited properties will be shown below here</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/28690-resampled.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">House for sell at Bunju 'A'</h3>
                            <p class="description">Bedrooms:3, Attached garage, Water and electricity service availble, Surrounded with block fence, All legal paper work available Price:Tsh 75000000</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/28658.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">House for rent at Ununio</h3>
                            <p class="description">All legal paper work available, 500m from Bahari Beach main road, Price:Tsh 70000000</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/imagesz.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Warehouse for rent at Tegeta</h3>
                            <p class="description">Easy access to main Bagamoyo road, electricity and water available, Price:Tsh 695000 Per Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/4865.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Plot for sell at Mbezi juu</h3>
                            <p class="description">Area =14520 square meters, All paper work available at local govnment of mbez juu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>