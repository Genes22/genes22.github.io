<?php
if (isset($_POST['submit-signout'])) {

session_start();
session_unset();
session_destroy();

    header("Location: ../Signin_Admin.php?signout=success");
    exit();
}
else {
    header("Location: ../Welcome_Admin.php");
    exit();
}


