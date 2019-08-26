<?php
require '../includes/main.php';
session_start();
if(!isset($_SESSION['adminEmail'])){
  header('location: ./');
}



if(isset($_POST['add'])){
	$productname = cleaner($_POST['Productname']);
	$productDescription= cleaner($_POST['ProductDescription']);
	$quantity = cleaner($_POST ['Quantity']);
	$price = cleaner($_POST ['Price']);
	
  //check if the product name is not empty
  if(!empty($productname)){
		if (isset($_FILES['image'])) {
		        $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $path_parts = pathinfo($file_name);
            $file_ext = strtolower($path_parts['extension']);
            $filename = $path_parts['filename'];
            $imageName = cleaner($filename.'.'.$file_ext);

            //Short version of the above 3 lines of code
            //$file_ext = strtolower(end(explode('.',$_FILES['ProductImage']['name'])));
            $extensions = array("jpeg", "jpg", "png");

            if(in_array($file_ext,$extensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
             }     
            if($file_size > 2097152) {
                $errors[]='File size must be excately 2 MB';
            }
            if(empty($errors)==true) {
              //moving the image file to products directory
                move_uploaded_file($file_tmp,"../img/uploaded/".$file_name);
                $insert = $db->prepare("INSERT INTO `products` (`Product name`, `Product description`, `Product quantity`, `Product price`, `productImage`) VALUES (?, ?, ?, ?,?)");
                if ($insert->execute(array($productname, $productDescription,$quantity,$price,$imageName))) {
                    $valid = "product added successifully";
                }else{
                    $valid =  "failed to insert new product please check your data";
                }
            }else{
                print_r($errors);
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Add products</title>
    
    <!-- Font awesome -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="../css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="../css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="../css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="../css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="../css/style.css" rel="stylesheet">    

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
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>OnoA<strong>Shop</strong> <span>Your Online Ordering Partner</span></p>
                </a>
              </div>           
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
        
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="../">Home </a></li>
            
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
            <?php 
                if (isset($valid)) {
                  echo $valid;
                }

            ?>
 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Add Products</h4>
                 <form action="addprod.php" enctype="multipart/form-data" class="aa-login-form" method="POST">
                    <label for="">Product name<span></span></label>
                    <input type="text" placeholder="Product name" name="Productname" required > <br> <br>
                    <label for="">Product Description<span></span></label>
                    <input type="text" placeholder="ProductDescription" name="ProductDescription" required > <br> <br>
                    <label for="">Quantity<span></span></label>
                    <input type="text" placeholder="Quantity" name="Quantity" required > <br> <br>
                    <label for="">Price<span></span></label>
                    <input type="Price" placeholder="Price" name="Price" required><br> <br>
                    <input type="file" name="image"> <br> <br>
                    <input type="submit" name="add" class="aa-browse-btn">
                    <br>

                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->




    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="../js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="../js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="../js/sequence.js"></script>
  <script src="../js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="../js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="../js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="../js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="../js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="../js/custom.js"></script> 
  

  </body>
</html>