 <?php
 if (isset($_POST['signup-submit'])) {

 require 'dbh.inc.php';

$Fname = $_POST['Firstname'];
$Lname = $_POST['Lastname'];
$Uname = $_POST['Username'];
$Pwd = ($_POST['Password']);
$RPwd = ($_POST['RPassword']);
$Mail = $_POST['Email'];
$Cnct = $_POST['Contact'];

#$Pwdlngth = strlen($Pwd);
#$RPwdlngth = strlen($RPwd);

#Checks for empty fields

if (empty($Fname) || empty($Lname) || empty($Uname) || empty($Pwd) || empty($RPwd) || empty($Mail) || empty($Cnct)) {
  header("Location: ../Signup.php?error=emptyfield");
  exit();
}
#Checks if first and last  name contain numeric
elseif (!preg_match("/^[a-zA-Z]*$/", $Fname) || !preg_match("/^[a-zA-Z]*$/", $Lname)) {
  header("Location: ../Signup.php?error=invalidname&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
  exit();
}
#Checks for valid email and user name
elseif (!filter_var($Mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $Uname)) {
    header("Location: ../Signup.php?error=invalidEmailUsername&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
  exit();
}

elseif (!filter_var($Mail, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../Signup.php?error=invalidEmail&Firstname=".$Fname."&Lastname=".$Lname."&Username=".$Uname."&Contact=".$Cnct);
  exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Uname)) {
  header("Location: ../Signup.php?error=invalidUsername&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
  exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Pwd)) {
  header("Location: ../Signup.php?error=invalidpwd&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
  exit();
}
elseif (strlen($Pwd) < 8) {
    header("Location: ../Signup.php?error=passwordlength&Firstname=".$Fname."&Lastname=".$Lname."&Username=".$Uname."&Contact=".$Cnct);
  exit();
}
elseif ($Pwd !== $RPwd) {
    header("Location: ../Signup.php?error=passwordcheck&Firstname=".$Fname."&Lastname=".$Lname."&Username=".$Uname."&Contact=".$Cnct);
  exit();
}
elseif (!preg_match("/^[+0-9]*$/", $Cnct)) {
    header("Location: ../Signup.php?error=invalidcontact");
    exit();
}
elseif (strlen($Cnct) > 13) {
        header("Location: ../Signup.php?error=invalidcontact");
        exit();
}
else {
  $sql = "SELECT uName FROM users WHERE uName =?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../Signup.php?error=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $Uname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
    header("Location: ../Signup.php?error=usernametaken&Email=".$Mail);
    exit();
    }
    else {
      $sql = "INSERT INTO users (fName, lName, uName, uPwd, uMail, uContact) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../Signup.php?error=sqlerror");
        exit();
      }
      else {
    $hashedPwd = password_hash($Pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $Fname, $Lname, $Uname,$hashedPwd, $Mail, $Cnct);
    mysqli_stmt_execute($stmt);
    header("Location: ../Signin.php?signup=success");
    exit();
      }
    }
  }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
header("Location: ../Signup.php");
exit();  
}


