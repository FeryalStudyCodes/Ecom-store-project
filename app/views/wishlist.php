<!DOCTYPE html>
<?PHP
$action = isset($_GET['action']) ? $_GET['action'] : "";
$_SESSION['wish'];
?>
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
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/style.css" />


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
            <button class="get-quote"><i class="fa fa-user"></i> دخول</button>
            
              <a class="get-quote dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-language"></i> اللغة
              </a>
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
       <img src="/Ecom-store-project/app/assets/images/login_store_logos-1 (1).png" style="width:20%;height:20%;">
     
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
            <h6>جوالات و أجهزة تابلت</h6>
                  <li><a href="main/categories">جوالات</a></li>
                  <li><a href="main/categories">تابلت</a></li>
                  <li><a href="main/categories">الإكسسوارات</a></li>
                  
                </ul>
              </div>
              <div class="col-sm-4">
                <ul class="multi-column-dropdown">
            <h6>أجهزة لابتوب و كمبيوتر</h6>
                  <li><a href="main/categories">أجهزة لابتوب</a></li>
                  <li><a href="main/categories">أجهزة كمبيوتر</a></li>
                  <li><a href="main/categories">اكسسوارات الكمبيوتر</a></li>
                  <li><a href="main/categories">ماسحات ضوئية</a></li>
                  
                </ul>
              </div>
              <div class="col-sm-4">
                <ul class="multi-column-dropdown">
            <h6>كاميرات</h6>
                  <li><a href="main/categories">ذواكر كاميرا</a></li>
                  <li><a href="main/categories">كاميرات درونز</a></li>
                  <li><a href="main/categories">كاميرات أكشن</a></li>
                  <li><a href="main/categories">كاميرات مدمجة</a></li>
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
   <?PHP
echo "<div class='col-md-12'>";
if($action=='removed'){
    echo "<div class='alert alert-info'>";
    echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
        echo "Product was removed from your wishlist!";
    echo "</div>";
}
else if($action=='added'){
    
  echo "<div class='alert alert-info'>";
  echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
      echo "Product was added to your cart!";
  echo "</div>";
}
else if($action=='exists'){
  echo "<div class='alert alert-info'>";
  echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
      echo "Product already exists in your cart!";
  echo "</div>";
}
else if($action=='emptyitem'){
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-danger'>";
        echo "No products found in your wishlist!";
    echo "</div>";
echo "</div>";
}
echo "</div>";

?>
  	
      
  <!-- checkout Page Start -->
        <div class="container">
          <div class="row">
            <div class="col-md-12  text-right">
              <h2 style="margin-bottom:30px ;"> قائمة المفضلة</h2>
            
            </div>
            <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                    <th scope="col" width="60"></th>
                    <th scope="col">الصورة</th>
                    <th scope="col">المواصفات</th>
                    <th scope="col">السعر</th>
                    <th scope="col" width="60"></th>
                    <th scope="col" width="60"></th>
                    </tr>
                </thead>
                <tbody>
                <?PHP
                  $rows = $data['wishlisttItems'];
                  $i=1;
                  foreach($rows as $row){
                  $id = $row->product_id;
                  $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
                ?>
                    <tr>
                    <th><?= $i; ?></th>
                    <td width="60"><img src="<?=$imageURl?>" height="80"></td>
                    <td width="110"><?=$row->product_short_desc?></td>
                    <td width="40">$<?= $row->product_price ?></td>
                    <td width="80" ><a href="main/shopingCartinwishlis?id=<?=$id?>" class="btn btn-success " styl=""><i  class="fa fa-shopping-cart"></i></a></td>
                    <td>
                  <a href='removeWishListItems?id=<?=$row->product_id?>'  class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');">
                  <i class="fas fa-trash-alt"></i></a>
                </td>
                    </tr>
                    <?PHP $i++; }?>
                </tbody>
                </table>
            </div>

            <!-- <div class="col-md-12">
             <div class="pull-left">
              <a href="#" class="btn btn-dark">Back to </a>
              <a href="#" class="btn btn-success">checkout</a>


             </div>
            </div> -->
          </div>
        </div>
  <!-- checkout Page End -->



 
  
    
    
 

    <!-- satrt footer   -->
    <div class="footer mb-12">
      <div class="container ">
          <div class="row">
                 <div class="col-lg-3 col-md-6 col-sm-6 ">
                     <div class="web-info">
                      <div class="footer-about-logo">
                        <a href="#"><img src="/Ecom-store-project/app/assets/images/login_store_logos-1 (1).png" style="width: 30%;height: 30%;" alt=""></a>
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
                  <div class="footer__copyright__payment"><img src="/Ecom-store-project/app/assets/images/payment-item.png" alt=""></div>

                 </div>
          </div>
      </div>

    </div>
    <!-- end copyRight  -->


   
    
    <!-- Jquery V.3.3.1 -->
    <script type="text/javascript" src="http://localhost:81/Ecom-store-project/app/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="http://localhost:81/Ecom-store-project/app/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="http://localhost:81/Ecom-store-project/app/assets/js/all.js"></script>
    <script type="text/javascript" src="http://localhost:81/Ecom-store-project/app/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost:81/Ecom-store-project/app/assets/js/main.js"></script>
  <script>
      $("#sliderShuffle").cycle({
        next: '#next',
        prev: '#prev'
      });
      
      $('.owl-carousel').owlCarousel({
        items:4,
        loop:true,
        margin:15,
        autoplay:true,
        autoplayTimeout:3000, //3 Second
        nav:true,
        responsiveClass:true,
        responsive:{
          0:{
            items:1,
            nav:true
          },
          600:{
            items:3,
            nav:true
          },
          1000:{
            items:4,
            nav:true
          }
        }

      });

      $(function(){
        $(".topbar ul li").click(function(){
          $(".topbar ul li").not(this).find("ul").slideUp();
          $(this).find("ul").slideToggle();
        });
        $(".topbar ul li ul li, productCategories ul li .megamenu").click(function(e){
          e.stopPropagation();	
        });
        $(".productCategories ul li").click(function(){
          $(".productCategories ul li").not(this).find(".megamenu").hide();
          $(this).find(".megamenu").toggle();
        });
        $(".otherInfoBody").hide();
        $(".otherInfoHandle").click(function(){
          $(".otherInfoBody").slideToggle();
        });
        $(".signBtn").click(function(){
          $("body").css("overflow", "hidden");
          $(".loginBox").slideDown();
        });
        $(".closeBtn").click(function(){
          $("body").css("overflow", "visible");
          $(".loginBox").slideUp();
        });
        $(".productViewBtn").click(function(e){
          e.preventDefault();
          $("body").css("overflow", "hidden");
          $(".productViewBox").slideDown();
        });
        $(".productViewBox-closeBtn").click(function(){
          $("body").css("overflow", "visible");
          $(".productViewBox").slideUp();
        });

        $(".sp-wrap").smoothproducts();
      });
    </script>
      
        
  
  </body>
</html>
