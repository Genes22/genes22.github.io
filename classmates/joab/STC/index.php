
<!DOCTYPE html>
<html lang="en">
<head>
<title>STOCK CHECKING SYSTEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
* {
  box-sizing: border-box;
}


body {
  font-family: times new roman;
  background: url();
}

/* Style the header */
header {
  background:url(image/worldd.jpg);
  padding: 30px;
  text-align: center;
  font-style: times new roman;
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
  height: 400px; /* only for demonstration, should be removed */
  background-color: grey;
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
  height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color:black;
  padding: 10px;
  text-align: center;
  color: white;
  font-size: 20px;
  height: 50;
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
}

.topnav a.passive {
  background-color:magenta;
  color: white;
}

.topnav a.mambo {
  background-color:pink;
  color: white;
}

.topnav .search-container {
  background-color:pink;
  color: blue;
  float: right;
  border: none;border-radius: 15px;box-shadow: 0 9px pink;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  border: none;border-radius: 15px;box-shadow: 0 9px pink;
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
  border: none;border-radius: 15px;box-shadow: 0 9px pink;
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
    border: none;border-radius: 15px;box-shadow: 0 9px pink;
  }
  .topnav input[type=text] {
    border: 1px solid blue;  
  }
}  ****joab***** 


jacque {font-family: Arial, Helvetica, sans-serif;}

/* Full-width i/nput fields */
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
**********************
/*myslides styles*/
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600em;
  position: relative;
  margin: auto;

}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 20px;
  font-style: italic;
  font-family: serif;
  font-variant: inherit;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-style: italic;
  font-family: serif;
  font-variant: inherit;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 5px;
  width: 25px;
  margin: 0 2px;
  background-color: black;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
  <!--<a class="active" href="registered.html">Home</a>-->
  <a class="active" href="#news">News</a>
     <a class="passive" href="about.html">About Us</a>
      <a class="passive" href="contact.html">Contact Info</a>
        <a class="passive" href="outerpage.html">Register</a>
         <a class="passive" href="support.html">Support</a>
      <a class="passive" href="logform.html">Login</a>
  <div class="search-container">
    <form action="/action_page.php" class="mambo">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  </div>
</div>

<div style="padding-left:16px"></div>
<h2 style="font-size: 20px; font-family: times new roman;">STOCK CHECKING SYSTEM</h2>
</body>
</header>

<section>
  <nav>
  
<div class="slideshow-container">
   <div class="mySlides fade">
     <div class="numbertext">JOAB & JACQUE</div>
     <img src="image/seller.jpg" style="width:100%">
  <div class="text">We are with you on the WORLD of Business,,,"WELCOME"</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">JOAB & JACQUE</div>
  <img src="image/buy.jpg" style="width:100%;height: 370px;">
  <div class="text"  style="color: black;"s>We are with you on the WORLD of Business,,,"WELCOME"</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">JOAB & JACQUE</div>
  <img src="image/price.jpg" style="width:100%">
  <div class="text">We are with you on the WORLD of Business,,,"WELCOME"</div>
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

      
    </ul>
  </nav>
  
  <article>
    <h1>Stock Checking System</h1>
     <p>This system is an innovation that came out of the urge to solve the challenge of knowing who actually has what in stock. Who is who, and who provides what service.
      <i>Is online system</i>  created and aimed to serve bussiness owners as well as business adminstrators by providing interface or working place to fetch and get informed about their business, for their stocks and condition of sales  in stock inventory or warehouse .This may help to provide an audit of sold and existing stock <br>.
      As well as we offer free product inventory listing to stock holders. For service providers, we offer an opportunity to showcase their services. We do not accept listings from 3rd parties in an effort to mitigate the confusion of who actually has what in stock and to provide accurate aggregated inventories and services.</p>

    <p>So this system by the way <i>aimed</i> to make good response basically to the owners by being responsive to their business whereby this are foundational act to make owners being easy updated for their business where this helpfull to increase efficiency,working capability as well as increase gross profit,improving control of allowances and reducing loss that sometimes comes from not being updated in business, also helpfull to be proactive and responsive to the current needs of the business.Our platform is built out of a complete understanding of the day to day challenges faced by our clients and we aim to ensure they are value-adding and sustainable.
      Your trusted place to verify who has what in stock    </p>
  </article>
</section>

<footer>
<p style=" text-align:center; font-family:Acronim; font-size:1em">All Right Resrved&copy;2018,Stock Checkings</p>

</footer>

</body>
</html>
