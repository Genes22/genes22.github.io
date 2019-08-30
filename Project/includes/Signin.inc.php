 <?php
 require 'dbh.inc.php';

if (isset($_POST['signin-submit'])) {
	$mailusername = $_POST['Username'];
	$pwd =  ($_POST['Password']);

	if (empty($mailusername) || empty($pwd)) {
		header("Location: ../Signin.php?error=emptyfield");
		exit();
	}else {
	$sql = "SELECT * FROM users WHERE uName=? OR uMail=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../Signin.php?error=sqlerror");
	exit();
	}else{
	mysqli_stmt_bind_param($stmt, "ss", $mailusername, $mailusername);
	mysqli_stmt_execute($stmt);	
    $result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {

		$pwdCheck = password_verify($pwd, $row['uPwd']);
		
		if ($pwdCheck == false) {
	       header("Location: ../Signin.php?error=wrongpassword");
           exit();
		}
		elseif ($pwdCheck == true) {
			session_start();

            $_SESSION['loggedin'] = true;
			$_SESSION['id'] = $row['idUsers'];
			$_SESSION['username'] = $row['uName'];

	       header("Location: ../Welcome_user.php?signin=success");
           exit();			
		}
		else {
	       header("Location: ../Signin.php?error=wrongpassword");
           exit();			
		}
 
		}
		else {
	       header("Location: ../Signin.php?error=nouser");
           exit();			
		}
	}
 
 }
}


else {
    header("Location: ../Signin.php");
    exit();
}