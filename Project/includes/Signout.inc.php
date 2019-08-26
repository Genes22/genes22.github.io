<?php
if (isset($_POST['submit-signout'])) {

session_start();
session_unset();
session_destroy();

    header("Location: ../Signin.php?signout=success");
    exit();
}
else {
    header("Location: ../Welcome_user.php");
    exit();
}


