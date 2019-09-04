<?php
session_start();
if (isset($_POST['submit-signout'])) {
	session_unset();
	session_destroy();

    header("Location: ../Signin.php?signout=success");
    exit();
}
else {
	session_unset();
	session_destroy();
    header("Location: ../welcome-user.php");
    exit();
}


