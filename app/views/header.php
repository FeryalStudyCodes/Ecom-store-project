<?php

$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$action = isset($_GET['action']) ? $_GET['action'] : "";
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
} 
$_SESSION['wish']=isset($_SESSION['wish']) ? $_SESSION['wish'] : array();
?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/bootstrap.css" />
       <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/bars-style.css">
  <script src="https://kit.fontawesome.com/ca3696487d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/style.css" />
     
    <script>
        window.console = window.console || function (t) {};
      </script>

      <script>
        if (document.location.search.match(/type=embed/gi)) {
          window.parent.postMessage("resize", "*&");
        }
      </script>

  </head>
   <body>
 
    <!-- Start Upper Bar -->
     <div class="upper-bar">
       <div class="container">
         <div class="row">
         <div class="col-sm info text-center text-sm-right">
       
            <i class="fa fa-phone"></i> <span class="fa-sphone"> +967 777 777 777. </span>
            <i class="fa fa-envelope" ></i> <span class="fa-semail"> login@gmail.com </span>
           
            </div>

          <div class="col-sm info text-center text-sm-left">
           <?php
    		if (isset($_SESSION['user_id'])) {
    			?>
        
    			  <button class="get-quote"> <a class="usr-login" href="main/logout"><i class="fa fa-user"></i> تسجيل الخروج</a></button>
          
    			<?php
      }
      else{
    			?>
            <button class="get-quote"> <a class="usr-login" href="main/login"><i class="fa fa-user"></i> دخول</a></button>
          
          <?PHP
          }
          ?>
              <a class="get-quote dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-language"></i> اللغة
              </a>
              <!-- <a href="admin/admin_login/index">  Dashboared</a> -->
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><img src="/Ecom-store-project/app/assets/images/ar.png"> العربية</a>
                <a class="dropdown-item" href="#"><img src="/Ecom-store-project/app/assets/images/en.png">  الإنجليزية</a>
              </div>
            
          
          </div>

         </div>
       </div>
     </div>
   <!-- End Upper Bar -->

   <!-- start Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light ">
     <div class="container">
     <a class="navbar-brand" href="#">
       <img src="http://localhost:81/Ecom-store-project/app/assets/images/login_store_logos-1 (1).png" style="width:20%;height:20%;">
     
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="main-nav" >
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="main/main">الرئيسية <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item ">
         <a  class="nav-link" href="main/getcat">الأقسام </a>
      
        </li>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="#">المنتجات</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">العروض</a>
         </li>
        
         <li class="nav-item">
           <a class="nav-link" href="#">تواصل معنا</a>
         </li>
         <li>
         <a class="nav-link" href="main/displayShopingCartItems">
            <?php
             $cart_count=count($_SESSION['cart']);
             ?>
             <i class="fa fa-shopping-cart"></i> <span class=" ty-minicart-count badge" id="comparison-count"><?php echo $cart_count; ?></span>
         </a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="main/displayWishListItems">
         <?php
             $wish_count=count($_SESSION['wish']);
             ?>
         <i class="fa fa-heart"></i><span class=" ty-miniwish-count badge" id="comparison-count"><?php echo $wish_count; ?></span></a>
         
        </li>
       </ul>
     </div>
   </div>
   </nav>  

   <!-- end Navbar -->
 