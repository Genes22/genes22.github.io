 <?php
require 'dbh.inc.php';
if (isset($_POST['signup-submit'])) { 
  $Fname = clean($_POST['Firstname']);
  $Lname = clean($_POST['Lastname']);
  $Uname = clean($_POST['Username']);
  $Pwd = clean($_POST['Password']);
  $RPwd = clean($_POST['RPassword']);
  $Mail = clean($_POST['Email']);
  $Cnct = clean($_POST['Contact']);

  if (empty($Fname) || empty($Lname) || empty($Uname) || empty($Pwd) || empty($RPwd) || empty($Mail) || empty($Cnct)) {
    header("Location: ../signup.php?error=emptyfield");
    exit();
  }elseif (!preg_match("/^[a-zA-Z]*$/", $Fname) || !preg_match("/^[a-zA-Z]*$/", $Lname)) {  #Checks if first and last  name contain numeric
    header("Location: ../signup.php?error=invalidname&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
    exit();
  }elseif (!filter_var($Mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $Uname)) { #Checks for valid email and user name
      header("Location: ../signup.php?error=invalidEmailUsername&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
    exit();
  }elseif (!filter_var($Mail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidEmail&Firstname=".$Fname."&Lastname=".$Lname."&Username=".$Uname."&Contact=".$Cnct);
    exit();
  }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Uname)) {
    header("Location: ../signup.php?error=invalidUsername&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
    exit();
  }elseif (!preg_match("/^[a-zA-Z0-9]*$/", $Pwd)) {
    header("Location: ../signup.php?error=invalidpwd&Firstname=".$Fname."&Lastname=".$Lname."&Contact=".$Cnct);
    exit();
  }elseif (strlen($Pwd) < 8) {
      header("Location: ../signup.php?error=passwordlength&Firstname=".$Fname."&Lastname=".$Lname."&Username=".$Uname."&Contact=".$Cnct);
    exit();
  }elseif ($Pwd !== $RPwd) {
      header("Location: ../signup.php?error=passwordcheck&Firstname=".$Fname."&Lastname=".$Lname."&Username=".$Uname."&Contact=".$Cnct);
    exit();
  }elseif (!preg_match("/^[+0-9]*$/", $Cnct)) {
      header("Location: ../signup.php?error=invalidcontact");
      exit();
  }elseif (strlen($Cnct) > 13) {
          header("Location: ../signup.php?error=invalidcontact");
          exit();
  }else {
    //verify if the username is not already taken.
    $user = $conn->prepare("SELECT uName FROM users WHERE uName =?");
    $user->execute(array($Uname));
    $user->fetch(PDO::FETCH_ASSOC);

    if ($user->rowCount() > 0) {
      header("Location: ../signup.php?error=usernametaken&Email=".$Mail);
      exit();
    }else {
      $salt = "@_*_@";
      $enqpwd = md5($salt.$Pwd.$salt);
      $reg = $conn->prepare("INSERT INTO users(fName, lName, uName, uPwd, uMail, uContact) VALUES (?, ?, ?, ?, ?, ?)");
      if($reg->execute(array($Fname, $Lname, $Uname,$enqpwd, $Mail, $Cnct))){
        header("Location: ../signin.php?signup=success");
        exit();
      }
    }
  }
}else {
  header("Location: ../signup.php");  
  exit();  
}