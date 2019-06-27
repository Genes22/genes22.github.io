<?php 
require 'includes/main.php';
session_start();
if (isset($_SESSION['loginEmail'])) {
    $email = $_SESSION['loginEmail'];
    $user = $db->prepare("SELECT * FROM `users` WHERE `Email`=:email");
    $user->execute(array(":email" => $email));
    $count = $user->rowCount();
    if($count == 0){
      header('location: login.php');
      unset($_SESSION['loginEmail']);
      $_SESSION['loginNotice'] = "Please login first to use Onoa shop";
    }
}else{
  header('location: login.php');
  $_SESSION['loginNotice'] = "Please login first to use Onoa shop";
}
$category = 1;
if (isset($_GET['category'])) {
  $cat = $_GET['category'];
  if ($cat == 'women') {
    $category = 0;
  }else{
    $category = 1;
  }
}

//add subscription 
if (isset($_POST['subscribeEmail'])) {
  $subEmail = $_POST['emailSub'];

  $add = $db->prepare("INSERT INTO `subscription` (`email`) VALUES (?)");
  if ($add->execute(array($subEmail))) {
    $submsg = "<div >
  <strong>Success!</strong>Subscription added..!!</div>";
  } 
}
//end subscription
//get product details
$products = $db->prepare("SELECT * FROM `products` WHERE `category`=?");
$products->execute(array($category));
?>
<html>

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>OnoA Shop | Prdoucts Page</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <header id="aa-header">
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p>OnoA<strong>Shop</strong> <span>Your Online Ordering Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
                        
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              
              <li><a href="aboutus.php">About Us</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
    </div>
  </section>
  <!-- / menu -->  
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/advert-banner.jpg" alt="advert-banner img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Products Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li class="active"></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->


<!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">
                      <?php 
                      if ($category == 0) {
                        echo 'WOMEN';
                      }else{
                        echo 'MEN';
                      }

                       ?>
                    </a></li>
                    
                   </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                      <?php
                      while ($prods= $products->fetch(PDO::FETCH_ASSOC)) {  
                        echo "<li>
                          <figure>
                          <a class='aa-product-img' href='details.php?product=".$prods['ProductName']."'><img src='img/uploaded/".$prods['productImage']."' alt='Slim Men Shirt img'>
                          </a>
                          <a class='aa-add-card-btn' onclick='addcart(".json_encode($prods['ProductName']).")'><span class='fa fa-shopping-cart'></span>Add To Cart</a>
                              <figcaption>
                              <h4 class='aa-product-title'><a href='details.php?product=".$prods['ProductName']."'>".$prods['ProductName']."</a></h4>
                              <span class='aa-product-price'>Tshs 25,000</span><span class='aa-product-price'><del>Tshs ".$prods['ProductPrice']."</del></span>
                            </figcaption>
                          </figure>                        
                         
                          <!-- product badge -->
                          <span class='aa-badge aa-sale' href='#'>SALE!</span>
                        </li>";
                       }
                       ?>          
                      </ul>
                    
                    </div>
              <!-- / men product category -->
              <!-- start women product category -->                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  
  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our Website </h3>
            <p>If you want our monthly newsletter, please enter your email below and subscribe</p>
            <form  method="POST" action="index.php" class="aa-subscribe-form">
              <input type="email" name="emailSub" id="" placeholder="Enter your Email">
              <input type="submit" name="subscribeEmail" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->
        
<script type="text/javascript">

  var addcart = (Product) =>{
    var data = Product;
    console.log(data);
    // $.ajax({
    //         type: 'POST',
    //         url: '/set_session',
    //         data: $("#userform").serialize()
    //     })
    //     .done(function(data){
    //         // show the response
    //          $('#response').html(data);
    //     })
    //     .fail(function() {
    //         // just in case posting your form failed
    //         alert( "Posting failed." );
    //     });
    //     // to prevent refreshing the whole page page
    //     return false;
  }
  

</script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  
  
  </body>
  
  </html>