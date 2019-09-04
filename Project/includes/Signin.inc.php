 <?php
session_start();
require 'dbh.inc.php';
if (isset($_POST['signin-submit'])) {
 	$mailusername = clean($_POST['Username']);
 	$pwd =  clean($_POST['Password']);
 	if (empty($mailusername) || empty($pwd)) {
 		header("Location: ../signin.php?error=emptyfield");
		exit();
	}else {
		$check  = $conn->prepare("SELECT * FROM users WHERE uName=? OR uMail=?");
		$check->execute(array($mailusername, $mailusername));
		$row = $check->fetch(PDO::FETCH_ASSOC);
		$count = $check->rowCount();
		if ($count > 0) { //check for user in db
			$salt = "@_*_@";
			$pass = md5($salt.$pwd.$salt);
			if ($pass == $row['uPwd']){
				$_SESSION['loggedin'] = true;
				$_SESSION['id'] = $row['idUsers'];
				$_SESSION['username'] = $row['uName'];
				if ($row['prev']==1) {
					$_SESSION['admin'] = $row['prev'];
				}
		       	header("Location: ../welcome-user.php");
	           	exit();
			}else{
		       header("Location: ../signin.php?error=wrongpassword");
	           exit();
			}
		}else{
			header("Location: ../signin.php?error=nouser");
           	exit();
		}
	}
}else {
    header("Location: ../Signin.php");
    exit();
}