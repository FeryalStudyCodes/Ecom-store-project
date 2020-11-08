<?php session_start();
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$action = isset($_GET['action']) ? $_GET['action'] : "";
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}

?>
<?php 
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
    <link rel="stylesheet" href="/Ecom-store-project1/app/assets/css/bars-style.css">
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
            <button class="get-quote"> <a class="usr-login" href="main/login"><i class="fa fa-user"></i> دخول</a></button>
            
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
       <img src="app/assets/images/login_store_logos-1 (1).png" style="width:20%;height:20%;">
     
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="main-nav" >
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
          <div class="dropdown show">
            <a href="#" class="nav-link dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الأقسام<b class="caret"></b>
            </a>
          
          <ul class="dropdown-menu multi-column columns-3">
            <div class="row">
              <div class="col-sm-4">
                <ul class="multi-column-dropdown">
                <?PHP
                        $rows=$data['categories'];
                        
                        foreach($rows as $row){
                          if($row->parent_catergory==0){
                            echo "<h6> ".$row->category_name."</h6>";
                          }else{
                            echo "<li><a href='main/categories'>".$row->category_name."</a></li>";
                          }
                            
                        }
                        ?>
          
                  
                </ul>
              </div>
              
             
            
        <div class="clearfix"></div>
            </div>
          </ul>
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
             // count products in cart
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
        <!-- <div class="buscar-caja"> 
          <input type="text" name="" class="buscar-txt" placeholder="Search ....."/> 
          <a class="buscar-btn"> <i class="fa fa-search"></i> </a> 
          
      </div> -->
       </ul>
     </div>
   </div>
   </nav>  

   <!-- end Navbar -->
   <?php
   echo "<div class='col-md-12'>";
   if($action=='added'){
       echo "<div class='alert alert-info text-right'>";
           echo "تم إضافة المنتج لسلّة التسوق";
           echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

       echo "</div>";

   }

   if($action=='exists'){
       echo "<div class='alert alert-info text-right'>";
           echo "المنتج موجود بالفعل في سلة ";
           echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

       echo "</div>";
   }
echo "</div>";
?>
 

 <?php
   echo "<div class='col-md-12'>";
   if($action=='wishadded'){
    echo "<div class='alert alert-info text-right'>";
    echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
        echo "تمت إضافة المنتج لقائمة أمنياتك";
    echo "</div>";
   }
   if($action=='wishexists'){
    echo "<div class='alert alert-info text-right'>";
    echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
        echo " المنتج موجود بالفعل في قائمة أمنياتك ";
    echo "</div>";
   }
echo "</div>";
?>
   <!-- Start  silder -->
<div class="slider">
    <div id="mysild" class="carousel slide " data-ride="carousel" >

         <div class="carousel-inner">
              <div class="carousel-item  carousel-one active">
               <div class="slider_txt">
            <div class="slide-title">
              <h2>تخفيضــات</h2>
            </div>
            <div class="slide-text">
              <p>لابتوبات لينوفو الجديدة بأسعار مغرية ومميزات ممتازة.</p>
            </div>
            <div class="clearfix"></div>
            <div class="slide-btns">
              <a href="" class="theme-btn-s2">إضافة للسلة</a>
              <a href="" class="theme-btn-s3">عرض تفاصيل المنتج</a>
            </div>
          </div>
        </div>
             <div class="carousel-item carousel-tow"></div>
             <div class="carousel-item carousel-three"></div>

             <ol class="carousel-indicators ">
               <li data-target="#mysild" data-slide-to="0" ></li>
               <li data-target="#mysild" data-slide-to="1"class="active"></li>
               <li data-target="#mysild" data-slide-to="2"></li>
             </ol>

         </div>
     </div>
 </div>




 <!-- End  silder -->

<!-- Product slider Start -->
<!--div class="slider">
  <div class="container">
    <div class="owl-carousel">
      <div class="item"><img src="app/assets/images/Acer.jpg"></div>
      <div class="item"><img src="app/assets/images/lenovo4.png"></div>
      <div class="item"><img src="app/assets/images/Acer_Chromebook_315_01_32ff69f880-300x274.jpg"></div>
      <div class="item"><img src="app/assets/images/ASUS-Chromebook-C423-1-300x202 (1).jpg"></div>
      <div class="item"><img src="app/assets/images/htc-desire-12_990b.jpg"></div>
    </div>
     
  </div>
</div-->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
   
    </div>
    </div>
    <div class="carousel-item">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
 
 
     </div>
     </div>
    <div class="carousel-item">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
  
 
 
     </div>
     </div>
    </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- Product slider End -->

<hr>

<!-- Banner Start -->
<!--div class="Add-banner">
  <div class="container">
    <div class="row">
      <div class="banner">
        <img src="app/assets/images/banner.jpg" alt="Banner">

    </div>
    
  </div>
</div>
</div-->
<!-- Banner End -->


<!--Satrt Featured Product-->
<div class="container">
  <h3 class="h4 text-sm-right mb-5 text-secondary ">إلكترونيات  </h3>    
  <div class="row">
  <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
           // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
           echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

               // echo "Update Cart";
            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
 
  </div>
</div>




<!--Start add-->
<div class="container">
    <div class="row">
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add.jpg">
      </div>
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg">
      </div>
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg">
      </div>
    </div>
  </div>
  <hr>
<!--End add-->

<!--Satrt Featured Product-->
<div class="container">
  <h3 class="h4 text-sm-right mb-5 text-secondary ">جوالات و أجهزة تابلت  </h3>    
  <div class="row">
  <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==38){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
 
  </div>
</div>

<hr>


<!--End Featured Product-->


<!--Start offers product-->
<!-- <div class="container">
  <h3 class="h4 text-sm-right mb-5 text-secondary ">أقوى عروض  </h3>
  <div class="row">
      <div class="col-md-3 col-sm-6">
          <div class="product-offers">
              <div class="product-image">
                  <a href="#">
                      <img class="pic-1" src="app/assets/images/iphone.jpg">
                  </a>
                  <ul class="social">
                      <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                  <span class="product-discount-label">خصم %25</span>
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#">أيفون 7 مجدد أصلي 32 جيجابايت+ 128 جيجابايت بضمان لمدة سنة   </a></h3>
                  <div class="price">
                       $291.63
                      <span class="old-price">$370.49</span>
                  </div>
                  <a class="add-to-cart" href="">أضف الى عربة التسوق</a>
                </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-offers">
            <div class="product-image">
                <a href="#">
                    <img class="pic-1" src="app/assets/images/5VQ9ZQoC1590590122.jpg">
                </a>
                <ul class="social">
                    <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <span class="product-discount-label">خصم %15</span>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">فكتوس ثول فكتوس 13 "ماك بوك اير - اسود</a></h3>
                <div class="price">
                  $360.24
                    <span class="old-price">$450.30</span>
                </div>
                <a class="add-to-cart" href="">أضف الى عربة التسوق</a>
              </div>
        </div>
      </div>
    <div class="col-md-3 col-sm-6">
      <div class="product-offers">
          <div class="product-image">
              <a href="#">
                  <img class="pic-1" src="app/assets/images/telephone.jpg">
              </a>
              <ul class="social">
                  <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                  <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
              <span class="product-discount-label">%خصم 10</span>
          </div>
          <div class="product-content">
              <h3 class="title"><a href="#">  
                تليفون أحادي الخط بسلك من باناسونيك - ابيض
                </a></h3>
              <div class="price">
                $17.51
                  <span class="old-price">$22.76</span>
              </div>
              <a class="add-to-cart" href="">أضف الى عربة التسوق</a>
          </div>
      </div>
    </div>
    
      
      <div class="col-md-3 col-sm-6">
        <div class="product-offers">
            <div class="product-image">
                <a href="#">
                    <img class="pic-1" src="app/assets/images/ph-1-color-black-moon-essential.jpg">
                </a>
                <ul class="social">
                    <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <span class="product-new-label">New</span>
                <span class="product-discount-label">خصم %23</span>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">سامسونج هاتف جالاكسي S20 الترا ثنائي الشريحة ذاكرة رام 12 جيجابايت وذاكرة داخلية 128 ...</a></h3>
                <div class="price">
                     $156.00
                    <span class="old-price">$669.17</span>
                </div>
                <a class="add-to-cart" href="">أضف الى عربة التسوق</a>
              </div>
        </div>
      </div>
  </div>
</div> -->

<!--End offers product-->

<!--Add Banner Start-->

<div class="container-fluid-row mt-12">
  <div class="row-fluid ">
    <div class="span16  ut2-bottom">
      <div class="row-fluid">
        <div class="span8 hidden-phone ">
          <div class="ty-banner__image-wrapper">
            <a href="#"><img src="app/assets/images/add (2).jpg"></a>
            
          </div>
      </div>
      <div class="span8 hidden-phone ">
        <div class="ty-banner__image-wrapper">
          <a href="#"><img src="app/assets/images/add (1).jpg"></a>
          
        </div>
    </div>

    </div>
  </div>
</div>

<!--Add Banner End-->

 
  
    
    
 

    <!-- satrt footer   -->
    <div class="footer mb-12">
      <div class="container ">
          <div class="row">
                 <div class="col-lg-3 col-md-6 col-sm-6 ">
                     <div class="web-info">
                      <div class="footer-about-logo">
                        <a href="#"><img src="app/assets/images/login_store_logos-1 (1).png" style="width: 30%;height: 30%;" alt=""></a>
                    </div>
                    <ul >
                      
                      <li> <i class="fa fa-cloud"></i> اليمن -صنعاء</li>
                      <li> <i class="fa fa-phone"></i>  967-777777777</li>
                      <li><i class="fa fa-envelope"></i><a href="mailto: loginstore@gmail.com?subject=Contact">Login@gmail.com</a></li>

                    </ul>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1 ">
                   <div class="helpful-links">
                        <h2>عن الموقع </h2>
                        <div class="row">
                          <div class="col">
                             <ul class="list-unstyled">
                                <li><a href="#">عن لوجن ستور</a></li>
                                <li><a href="#">تعليمات الاستخدام</a></li>
                                <li><a href="#"> سياسة التوصيل</a> </li>
                                <li><a href="#">سياسة الخصوصية</a></li>
                                <li><a href="#">سياسة الخصوصية</a></li>

                             </ul>
                          </div>

                          <div class="col">
                             <ul class="list-unstyled">
                                <li><a href="#">من نحن</a></li>
                                <li><a href="#">اتصل بنا</a></li>
                                <li><a href="#">كيف تشتري</a></li>
                                <li><a href="#">سياسة الخصوصية</a> </li>
                                <li><a href="#">سياسة التوصيل</a></li>
                                
                                  
                             </ul>
                          </div>

                        </div>
                   </div>

                 </div>
                 <div class="col-lg-4 col-md-12 ">
                  <div class="footer__widget">
                    <h6>الانضمام إلى النشرة الإخبارية الآن</h6>
                    <p>الحصول على التحديثات حو ل أحدث منجاتنا متجر العروض الخاصة </p>

                    <form action="#">
                      <input class="form-control mr-sm-2" type="email" placeholder=" أدخل إيميلك" aria-label=" Email" width="50%">
                      <button class="btn  my-2 my-lg-0" type="submit">الأشتراك</button>
                    </form>
                    <!-- <div class="socials">
                      <a href="#"><i class="fa  fa-facebook"></i></a> 
                      <a href="#"><i class="fa fa-instagram"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-youtube"></i></a>
                  </div> -->
                </div>
            </div>
              </div>
                
          </div>
      </div>

    
    <!-- end  footer  -->

    <!-- start copyRight  -->
    <div class="copy">
      <div class="container">
          <div class="row">
                 <div class="col-lg-6 text-center text-md-left text-uppercase">
                  All Rights Reserved | Design by &copy;LoginStore 2020
                 </div>
                 <div class="col-lg-6 text-center text-md-left ">
                  <div class="footer__copyright__payment"><img src="app/assets/images/payment-item.png" alt=""></div>

                 </div>
          </div>
      </div>

    </div>
    <!-- end copyRight  -->
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/all.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/main.js"></script>
   
   
    <!-- <script>
    $(document).ready(function(){
    $('.cart').click(function(){
      var productid = $(this).data('id');
      alert(productid);
    });
    });
    </script> -->


</body>
</html>
