 <!DOCTYPE html>
<html lang="en">
<head>
<title>STOCK CHECKING SYSTEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {font-family: times new roman;font-style: oblique;  background:url();}
* {box-sizing: border-box;}

.kalolo { 
  float: center;
  background-color: #4CAF50;
  border: 0px solid blue;
  margin-top: 0rem;
  margin-left: 0rem;
  font-weight: bold;
  width: 5rem;
  font-style: oblique;
  font-size: 25px;
  text-align: center;
  color: #ccc;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: grey ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#4CAF50  ;border: none;border-radius: 15px;box-shadow: 0 9px pink;
}

input placeholder{ background-color: #ccc;border: none;border-radius: 15px;box-shadow: 0 9px green; }

.tab {
  background-color: none;
  color: white;
  font-style: italic;
}
.tab input {
  width: 20rem;
  color: blue;
  height: 2rem;
  text-align: center;
  border: none;border-radius: 15px;box-shadow: 0 9px green;
}

input[type=radio]{
  background-color: red;
  width: 19px;
  height: 14px;
}

.gen {
  background-color: none;
  color: white;
  font-style: italic;
}

.containers {
  border-radius: 5px;
  width: 30rem;
  float: right;
  display: flex;
  margin-top: -38rem;
  margin-left: 28rem;
  /*background-color: grey;*/
  padding: 20px;
}
.coda { 
  float:left;
  background-color: none;
  border: 0px solid blue;
  margin-top: 0rem;
  margin-left: 0rem;
}

  ***************************************************
* {
  box-sizing: border-box;
}


body {
  font-family: times new roman;
  background: url();
}

/* Style the header */
header {
  background:url(world.jpg);
  padding: 30px;
  text-align: center;
  font-style: serif;
  height: 350px;
  color: #ccc;
}

/* style of sidebar 2 */
sidebar2 {
  background-color: yellow
}
/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 60em; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  font-family: Times New Roman;
  padding: 20px;
  width: 70%;
  background-color:#4CAF50;
  height: 60em; /* only for regist form */
}

/* Clear floats after the columns */
section:afters {
  content: "";
  display: table;
  height: 0px;
  clear: both;
}

/* Style the footer */
footer {
  background-color:black;
  padding: 10px;
  text-align: center;
  color: white;
  font-size: 20px;
  height: 70;
  margin-top: 0em;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

 Jacque{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px pink;
}

.topnav a.passive {
  background-color:magenta;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 15px;
  box-shadow: 0 9px #ccc;
}

.topnav a.mambo {
  background-color:pink;
  color: white;
}

.topnav .search-container {
  background-color:pink;
  color: blue;
  float: right;
   border: none;
  border-radius: 15px;
  box-shadow: 0 9px #ccc;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
   border: none;
  border-radius: 15px;
  box-shadow: 0 9px #ccc;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid blue;  
  }
}  ****joab***** 


jacque {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
} */ login */


body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color:magenta;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: magenta;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: blue;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}


******************************************************
/*myslides style*/
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 400em;
  position: relative;
  margin:auto;
  height: 500px;
  background-color: none;
  margin-top: 2em;
  margin-left: 0em;
}

/* Caption text */
.text {
  color:black;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: red;
  font-size: 18px;
 font-family: times new roman;
  font-style: oblique;
  padding: 8px 12px;
  position: absolute;
  top: 0;

}

/* The dots/bullets/indicators */
.dot {
  
  height: 5px;
  width: 15px;
  margin: 0 2px;
  background-color: pink;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.2s ease;
}

.active {
  background-color:pink;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 16.5s;
  animation-name: fade;
  animation-duration: 0.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
</head>
<body>
  
<header>
  
 

<div class="topnav">
  <a class="active" href="index.html">Home</a>
  <a class="passive" href="#news">News</a>
  <a class="passive" href="about.html">About Us</a>
  <a class="passive" href="contact.html">Contact Info</a>
  <a class="passive" href="register.html">Register</a>
  <a class="passive" href="Support.html">Support</a>
  <a class="passive" href="Homepage.html">Login</a>
  <div class="search-container">
    <form action="/action_page.php" class="mambo">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  </div>
</div>

<div style="padding-left:16px"></div>



 <a href="default.asp">
  <img src="calcu.jpg" alt="Stock Checking System" style="width:300px;height:150px;border:0;margin-top: 2em;">
</a>

<h2 style="font-size: 20px; font-family: times new roman;">STOCK CHECKING SYSTEM</h2>
  
</body>
</header>

<section>
  <nav>
   <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">We open the WORLD of Business for YOU....!!!!!!!</div>
  <img src="price.jpg" style="width:100%; height: 500px;">
  <div class="text">Welcome stock checking system</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">We open the WORLD of Business for YOU....!!!!!!!</div>
  <img src="buy.jpg" style="width:100%; height: 500px;">
  <div class="text">Welcome stock checking system</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">We open the WORLD of Business for YOU....!!!!!!!</div>
  <img src="seller.jpg" style="width:100%; height: 500px;">
  <div class="text">Welcome stock checking system</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div style="font-family: times new roman  font-style:oblique; font-size: 4em; background-color: green;height: 300px;">
<P>STOCK <br>CHECKING<br> SYSTEM</P>
</div>
  </nav>


  <article>
<body>

<div class="coda">
   <h1 style="font-family: times new roman; font-size: 20px; font-weight: bolder;">REGISTER:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
   <input placeholder="First name..." type="text" name="fname">
   <input placeholder="Last name..." type="text" name="lname">
  </div>
  <div class="tab">Contact Info:
   <input placeholder="E-mail..." type="email" name="email">
   <input placeholder="Phone..." type="number" name="phone">
  </div>
  <div class="tab">Where are you from:
    <p><label for="country" style="color:white";>Country</label></p>
    <select id="country" type="text" name="country">
      <option value="australia">Pakistan</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="South Africa">USA</option>
      <option value="Tanzania">Tanzania</option>
    </select>
  </div>
  <div class="gen">Gender:
   <input type="radio" name="gender" value="male" checked> Male
   <input type="radio" name="gender" value="female" style=""> Female
   <input type="radio" name="gender" value="other"> Other
  </d

    <p><label for="fname" style="color:white";>Company Name</label></p>
    <input type="text" id="fname" name="company" placeholder="Your Company name..">

    <p><label for="lname" style="color:white";>Business Name</label></p>
    <input type="text" id="lname" name="business" placeholder="Your Business name..">


    <label for="subject" style="color:white";>Subject</label>
    <textarea id="subject" name="subject" placeholder="Write Short Description About Your Business.." style="height:95px; color:magenta;border: none;border-radius: 15px;box-shadow: 0 9px pink;"></textarea>
<input type="submit" style="border: none;
  border-radius: 15px; background-color: grey;
  box-shadow: 0 9px pink;" value="Submit">
  </div>
</div>
  </form>  
</body>
  </article>
</section>

<footer>
<!--<p>If you are ready registered on our system please Login here to open your account............ </p>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->
  <p style=" text-align:center; font-family:Acronim; font-size:1em margin-top:4em;">All Right Reserved&copy;2018,Stock Checking</p>


<!--<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <label for="uname"><b>Username</b></label><br>
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
      <button type="submit">Login</button><br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:green">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>--->



</footer>


</body>
</html>
