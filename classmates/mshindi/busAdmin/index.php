<?php 
require '../includes/daba.php';
session_start();
if (isset($_SESSION['busSecurity'])){
    unset($_SESSION['busSecurity']);
}
if (isset($_SESSION['loginSuccess'])) {
    unset($_SESSION['loginSuccess']);
}
if (isset($_POST['Login'])) {
    $email = cleaner($_POST['email']);
    $pass = md5(cleaner($_POST['password']));
    
    //checking if the details entered exist in the database
    $admin = $db->prepare("SELECT * FROM `admin` WHERE `email` = ?");
    $admin->execute(array($email));
    $user = $admin->fetch(PDO::FETCH_ASSOC);

    //checking for user password and number of users returned from the database.
    if($admin->rowCount() == 1){
        if ($user['password'] == $pass) {
            $_SESSION['busSecurity'] = $user['email'];
            $_SESSION['loginSuccess'] = "Welcome to the admin panel";
            header('location: busdet.php');
        }else{
            $msg = "Try again: Wrong password entered";
        }

    }else{
        $msg = "Please enter the correct details";
    }
}   

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body><div id="app">
        <nav class="navbar navbar-default navbar-static-top   page-nav-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="#">
                        Mshindi buses
                    </a></h1>
                </div>
            </div>
        </nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2 login-box">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h3>Login</h3></div>
                    <div id="login-box-heading" class="panel-heading">
                        <?php 
                        if (isset($msg)) {
                            echo "<div class='alert alert-danger alert-dismissible  show' role='alert'>
                                <strong>Failed!</strong>".$msg."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                                unset($msg);
                        }
                        ?>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="#" role="form">
                                <div class="form-group">
                                    <label for="email" class="control-label col-md-4 control-label">Email Address</label>
                                    <div class="col-md-6">
                                        <input type="email" name="email" required class="form-control change" id="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label control-label col-md-4">Password </label>
                                    <div class="col-md-6">
                                        <input type="password" name="password" required class="form-control change" id="password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-3 text-center">
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                        <button class="btn btn-primary" type="submit" name="Login">Login </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>