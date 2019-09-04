<?php
// Initialize the session
session_start();
require 'includes/dbh.inc.php';
 
// Check if the user is already logged in, if no then redirect him to signin page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: Signin.php");
  exit;
}
if (isset($_SESSION['admin'])) {
    $isadmin = $_SESSION['admin'];
}else{
    session_destroy();
    unset($_SESSION['admin']);
    header('location: signin.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User management</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="background-image:url(assets/img/home.jpg);">
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
        <div class="container-fluid"><a class="navbar-brand" href="welcome-user.php" data-bs-hover-animate="pulse" style="background-repeat:no-repeat;background-size:cover;width:217px;height:106px;background-color:#ffffff;background-image:url(&quot;assets/img/imagess.png&quot;);"></a>
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
                    <?php if (isset($isadmin)): ?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="manage.php" data-bs-hover-animate="tada" style="color:#ffffff;"><strong>Manage</strong></a></li>
                    <?php endif ?>
                </ul>
                <a class="btn btn-primary active btn-sm float-right visible" role="button" href="Change_password.php" data-bs-hover-animate="pulse" style="margin-top:-3px;width:155px;background-color:rgb(26,108,143);margin-right:15px;"><strong>CHANGE PASSWORD</strong></a>
                <form class="form-inline flex-shrink-1 flex-sm-shrink-1 flex-md-shrink-1" action="includes/Signout.inc.php" method="post"><button class="btn btn-primary active btn-sm float-right visible" type="submit" data-bs-hover-animate="pulse" style="margin-top:-3px;width:76px;background-color:rgb(0,0,0);margin-right:22px;"><strong>Sign Out</strong></button></form>
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
                $result = $conn->prepare("SELECT * FROM users ORDER BY prev DESC");
                $result->execute();
                if ($result->rowCount() > 0){
                   echo '<table class="table table-striped table-dark table-sm">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th>No#</th>';
                            echo '<th>First Name</th>';
                            echo '<th>Last Name</th>';
                            echo '<th>User Name</th>';
                            echo '<th>E-mail</th>';
                            echo '<th>Phone</th>';
                            echo '<th>Type</th>';
                            echo '<th>Action</th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    $count = 1;
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                        echo '<tr>';
                            echo '<td>'.$count.'</td>';
                            echo '<td>'.$row['fName'].'</td>';
                            echo '<td>'.$row['lName'].'</td>';
                            echo '<td>'.$row['uName'].'</td>';
                            echo '<td>'.$row['uMail'].'</td>';
                            echo '<td>'.$row['uContact'].'</td>';
                            if ($row['prev'] == 1) {
                               echo "<td>Admin</td>";
                               echo "<td style='width:55px'>
                                    <a class='btn btn-success active btn-block' role='button'>Root</a></td></tr>
                                </tbody>";
                            }else{
                                echo "<td>User</td>";
                                echo "<td style='width:55px'>
                                    <a class='btn btn-danger active btn-block' role='button' href='delete.php?user=".$row['idUsers']."'>Delete</a></td></tr>
                                </tbody>";
                            }
                    $count++;
                }
                echo '</table>';
            }
                ?> 
            </div>
            </div>
        </div>
    </div>
<div class="clear" style="clear: both;"></div>
<div class="footer-dark" style="background-color:rgb(0,0,0);width: 100%;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">house</a></li>
                        <li><a href="#"></a>Hostel</li>
                        <li><a href="#"></a>Godown</li>
                        <li><a href="#"></a>Land</li>
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
                </div>
                <div class="col item social"><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-whatsapp-outline"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-facebook"></i></a><a href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-instagram"></i></a>
                    <a
                        href="#" data-bs-hover-animate="rubberBand"><i class="icon ion-social-twitter"></i></a>
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