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
    <title>Login Store - الرئيسية</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/bars-style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/ca3696487d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/style.css" /> -->
  	  <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/stylepro.css" />
    
     
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
 
  
   <header>
 <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
			<div class="upper-bar" id="upper-bar-con">
          <div class="container">
            <ul class="row bar-info float-child">
            <div class="col-sm info text-center text-sm-left">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></li>
              <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
              <!-- <li><a href="#"><i class="fas fa-phone" aria-hidden="true"></i></i><span class="fa-sphone"> +967 777 777 777 </span></a></li> -->
              <!-- <li><a href="#"><i class="fas fa-envelope" aria-hidden="true"></i><span class="fa-semail"> login@gmail.com </span></a></li> -->
              
            </div>
            </ul>
            <ul class="row bar-log float-child">
            <div class="col-sm info text-center text-sm-right">
             <?php
    		if (isset($_SESSION['user_id'])) {
    			?>
            <li><button class="get-quote"><a class="usr-login" href="main/logout"><i class="fa fa-user usr-login" aria-hidden="true"></i>تسجيل الخروج</a></button></li>
              	<?php
      }
      else{
    			?>
            <li><button class="get-quote"><a class="usr-login" href="main/login"><i class="fa fa-user usr-login" aria-hidden="true"></i>حسابي</a></button></li>
 <?PHP
          }
          ?>
              <li><a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-language" aria-hidden="true"></i> اللغة
              </a>
              <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item text-right" id="first-lang" href="#"> العربية</a>
                <a class="dropdown-item text-right" href="#">الإنجليزية</a>
              </div>
            </li>
            </div>
            </ul>
        </div>
       </div>

<div class="container-fluid navbar-container">
        <div class="container">
        <div class="header-holder">
      <div class="navbar-header">
      <a class="navbar-brand" href="main/main">
            <img src="/Ecom-store-project/app/assets/images/login_store_logos-2 (1).png" style="/* width:20%; *//* height:50%; */">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
        </div>
        
				<div id="navbar" class="navbar-collapse collapse" id="main-nav">
					<ul class="nav navbar-nav navbar-left">
						<li class="nav-item active menu-item"><a href="main/main">الرئيسية<span class="sr-only">(current)</span></a></li>
						<li class="nav-item menu-item"><a class="nav-link" href="main/getcat">الأقسام</a></li>
            <li class="nav-item menu-item"><a class="nav-link" href="#">العروض</a></li>
            <li class="nav-item menu-item"><a class="nav-link" href="main/about">عن المتجر</a></li>
            <li class="nav-item menu-item"><a class="nav-link" href="main/contactus">تواصل معنا</a></li>
            <li class="nav-item menu-item">
             <a class="nav-link" href="main/displayShopingCartItems">
              <?php
             $cart_count=count($_SESSION['cart']);
             ?>
               <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class=" ty-minicart-count badge" id="comparison-count"><?php echo $cart_count; ?></span>
            </a>
            </li>
            <li class="nav-item  menu-item">
         <a class="nav-link" href="main/displayWishListItems">
         <?php
             $wish_count=count($_SESSION['wish']);
             ?>
         <i class="fa fa-heart"></i><span class=" ty-minicart-count badge" id="wishcomparison-count"><?php echo $wish_count; ?></span></a>
         
        </li>
            <li class="nav-item menu-item"><a class="nav-link" href="#" id="search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          </ul>
            <div class="row" id="search-bar">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"><button class="btn" id="search-btn">بحث!</button></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
	</nav>
</header>
 
 