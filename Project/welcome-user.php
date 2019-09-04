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
    unset($_SESSION['admin']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome user| HOMESITE AND ESTATE AGENT ONLINE MANAGEMENT SYSTEM</title>
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
<div class="row">
    <div class="column" style="width:16%;margin-left:1%;">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th colspan="2">My Account Information</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $id = $_SESSION['id'];
                        $details = $conn->prepare("SELECT * FROM users WHERE idUsers= ?");
                        $details->execute(array($id));
                        while ($det = $details->fetch(PDO::FETCH_ASSOC)) {
                     ?>
                    <tr>
                        <td><strong>Firstname</strong></td>
                        <td><a class="btn btn-primary active btn-sm float-right" role="button" href="UpdatefName.php" title="Click to edit"><?php echo ucfirst($det['fName']); ?></a></td>
                    </tr>
                    <tr>
                        <td><strong>Lastname</strong></td>
                        <td><a class="btn btn-primary active btn-sm float-right" role="button" href="UpdatelName.php" title="Click to edit"><?php echo ucfirst($det['lName']); ?></a></td>
                    </tr>
                    <tr>
                        <td><strong>Username</strong></td>
                        <td><a class="btn btn-warning active btn-sm float-right" role="button" title="Username Cannot be changed"><?php echo ucfirst($det['uName']); ?></td>
                    </tr>
                    <tr>
                        <td><strong>E-mail</strong></td>
                        <td><a class="btn btn-warning active btn-sm float-right" role="button" title="Email Cannot be changed"><?php echo $det['uMail']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Contact</strong></td>
                        <td><a class="btn btn-primary active btn-sm float-right" role="button" href="UpdateuContact.php" title="Click to change the Phone number"><?php echo $det['uContact']; ?></a></td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="2"><a class="btn btn-danger active btn-block btn-sm" role="button" href="Change_password.php">Change Account Password</a></td>
                    </tr>
                </tbody>
            </table>
    </div>
    <div class="container" style="width: 80%;">
        <center>
            <table>
                <tbody>
                    <tr>
                        <td colspan="2"><br>
                            <form method="POST">
                            <button class="btn btn-primary active btn-sm" role="button" name="searchho_all_submit" type="submit">
                                <strong>Hostel</strong></button>
                            <button class="btn btn-primary active btn-sm"  name="searchh_all_submit" type="submit" style="">
                                <strong>Houses</strong></button>
                            <button class="btn btn-primary active btn-sm" name="searchl_all_submit" type="submit" style="">
                                <strong>Land</strong>
                            </button>
                            <button class="btn btn-primary active btn-sm" name="searchg_all_submit" type="submit">
                                <strong>Warehouses</strong>
                            </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
        <div class="column">
                <?php
                $main = 'houses'; //this variable will be unset in every submisson
                if (isset($_POST['searchh_all_submit'])) {
                    unset($main);
                    $result = $conn->prepare("SELECT * FROM houses");
                    $result->execute();
                    if ($result->rowCount() > 0) {
                        echo "<div class='column' style='display:block; padding-top:20px;'>";
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div class='row border rounded mb-2' style='margin-left:25px;background-color:#afafaf;width:450px;float:left;'>
                            <div class='column' style='margin-bottom:10px;'>
                            <img src='assets/img/houses/".$row['image']."' alt='some image' height='200' width='200'>
                                </div>
                                <div class='col p-3'>
                                  <strong class='d-inline-block mb-2 text-primary'> House ".$row['Status']."</strong>
                                  <h3 class='mb-0'>".$row['City']."</h3>
                                  <div class='mb-1 text-muted'>".$row['District']."</div>
                                  <p class='card-text mb-auto'>".substr($row['Discription'], 0, 50)."...</p>
                                  <a href='details.php?prop=house&un=".$row['Id']."'>Continue reading</a>
                                  ";
                               if (isset($isadmin)) {
                            echo "<a href='delete.php?prop=house&del=".$row['Id']."' class='btn btn-danger'>Delete</a>
                                </div> </div>";
                            }else{
                                  echo "</div> </div>";  
                            }
                        }
                    }
                }
                if (isset($_POST['searchl_all_submit'])){
                    unset($main);
                    $search = $conn->prepare("SELECT *  FROM land");
                    $search->execute();
                    if ($search->rowCount() > 0) {
                        echo "<div class='column' style='display:block; padding-top:20px;'>";
                    while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
                     echo "<div class='row border rounded mb-2' style='margin-left:25px;background-color:#afafaf;width:450px;float:left;'>
                            <div class='column' style='margin-bottom:10px;'>
                            <img src='assets/img/land/".$row['image']."' alt='some image' height='200' width='200'>
                                </div>
                                <div class='col p-3'>
                                  <strong class='d-inline-block mb-2 text-primary'>Land ".$row['Status']."</strong>
                                  <h3 class='mb-0'>".$row['City']."</h3>
                                  <div class='mb-1 text-muted'>".$row['District']."</div>
                                  <p class='card-text mb-auto'>".substr($row['Discription'], 0, 50)."...</p>
                                  <a href='details.php?prop=land&un=".$row['Id']."'>Continue reading</a>
                                  ";
                            if (isset($isadmin)) {
                                echo "<a href='delete.php?prop=land&del=".$row['Id']."' class='btn btn-danger'>Delete</a>
                                </div> </div>";
                            }else{
                                  echo "</div> </div>";  
                            }
                        }        
                    }
                }
               if (isset($_POST['searchg_all_submit'])) {
                    unset($main);
                    $sear = $conn->prepare("SELECT * FROM godown");
                    $sear->execute();
                    if ($sear->rowCount() > 0) {
                        echo "<div class='column' style='display:block; padding-top:20px;'>";
                     while ($row = $sear->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='row border rounded mb-2' style='margin-left:25px;background-color:#afafaf;width:450px;float:left;'>
                            <div class='column' style='margin-bottom:10px;'>
                            <img src='assets/img/godown/".$row['image']."' alt='some image' height='200' width='200'>
                                </div>
                                <div class='col p-3'>
                                  <strong class='d-inline-block mb-2 text-primary'> Godown ".$row['Status']."</strong>
                                  <h3 class='mb-0'>".$row['City']."</h3>
                                  <div class='mb-1 text-muted'>".$row['District']."</div>
                                  <p class='card-text mb-auto'>".substr($row['Discription'], 0, 50)."...</p>
                                  <a href='details.php?prop=godown&un=".$row['Id']."'>Continue reading</a>
                                  ";
                            if (isset($isadmin)) {
                                echo "<a href='delete.php?prop=godown&del=".$row['Id']."' class='btn btn-danger'>Delete</a>
                                </div> </div>";
                            }else{
                                  echo "</div> </div>";  
                            }
                        }            
                    }
                }
               if (isset($_POST['searchho_all_submit'])) {
                    unset($main);
                    $hostel = $conn->prepare("SELECT * FROM hostel");
                    $hostel->execute();
                    if ($hostel->rowCount() > 0) {
                        echo "<div class='column' style='display:block; padding-top:20px;'>";
                while ($row = $hostel->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='row border rounded mb-2' style='margin-left:25px;background-color:#afafaf;width:450px;float:left;'>
                            <div class='column' style='margin-bottom:10px;'>
                            <img src='assets/img/hostel/".$row['image']."' alt='some image' height='200' width='200'>
                                </div>
                                <div class='col p-3'>
                                  <strong class='d-inline-block mb-2 text-primary'> Hostel ".$row['Status']."</strong>
                                  <h3 class='mb-0'>".$row['City']."</h3>
                                  <div class='mb-1 text-muted'>".$row['District']."</div>
                                  <p class='card-text mb-auto'>".substr($row['Discription'], 0, 50)."...</p>
                                  <a href='details.php?prop=hostel&un=".$row['Id']."'>Continue reading</a>
                                  ";
                            if (isset($isadmin)) {
                                    echo "<a href='delete.php?prop=hostel&del=".$row['Id']."' class='btn btn-danger'>Delete</a>
                                </div> </div>";
                            }else{
                                  echo "</div> </div>";  
                            }
                        }
                    }
                }
                
                if (isset($main)) {
                    $result = $conn->prepare("SELECT * FROM houses");
                    $result->execute();
                    if ($result->rowCount() > 0) {
                        echo "<div class='column' style='display:block; padding-top:20px;'>";
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div class='row border rounded mb-2' style='margin-left:25px;background-color:#afafaf;width:450px;float:left;'>
                            <div class='column' style='margin-bottom:10px;'>
                            <img src='assets/img/houses/".$row['image']."' alt='some image' height='200' width='200'>
                                </div>
                                <div class='col p-3'>
                                  <strong class='d-inline-block mb-2 text-primary'> House ".$row['Status']."</strong>
                                  <h3 class='mb-0'>".$row['City']."</h3>
                                  <div class='mb-1 text-muted'>".$row['District']."</div>
                                  <p class='card-text mb-auto'>".substr($row['Discription'], 0, 50)."...</p>
                                  <a href='details.php?prop=house&un=".$row['Id']."'>Continue reading</a>";
                        if (isset($isadmin)) {
                        echo "<a href='delete.php?prop=house&del=".$row['Id']."' class='btn btn-danger'>Delete</a>
                            </div> </div>";
                        }else{
                              echo "</div> </div>";  
                        }
                    }
                }
            }

                ?>
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