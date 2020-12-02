<?php
session_start();
 $_SESSION['user_id'];
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$action = isset($_GET['action']) ? $_GET['action'] : "";
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
} 

$_SESSION['wish']=isset($_SESSION['wish']) ? $_SESSION['wish'] : array();
?>

<?PHP
include "app/views/header.php"; 

?>
 
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
       <img src="http://localhost/Ecom-store-project/app/assets/images/login_store_logos-1 (1).png" style="width:20%;height:20%;">
     
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
            if (isset($_GET['id']) && $_GET['id'] == 4){
              unset($_SESSION['cart']);
              $cart_count = 0;
            }
           else{
            $cart_count=count($_SESSION['cart']);
           }
             ?>
             <i class="fa fa-shopping-cart"></i> <span class=" ty-minicart-count badge" id="comparison-count"><?php echo $cart_count; ?></span>
         </a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="main/displayWishListItems">
         <?php
             $wish_count=count($_SESSION['wish']);
             ?>
         <i class="fa fa-heart"></i><span class=" ty-miniwish-count badge" id="wishcomparison-count"><?php echo $wish_count; ?></span></a>
         
        </li>
       </ul>
     </div>
   </div>
   </nav>  
 
   <!-- end Navbar -->
 
    
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="signin my-5">
                <div class="signin-body" style="direction: rtl;">
                  <h5 class="signin-title text-center"></h5>
                  <div class="error" id="div_erroe"></div>
                  <div class="success"></div>
                  <?php if (isset($_GET['id']) && $_GET['id'] == 0) { ?>
                    <p class="error"><?php echo "الرجاء التاكد من البيانات المدخلة"?></p>
                    <?php } ?>
                    <?php if (isset($_GET['id']) && $_GET['id'] == 1) { ?>
                    <p class="error"><?php echo "الرجاء التاكد من ادخال تاريخ الانتهاء"?></p>
                    <?php } ?>
                    <?php if (isset($_GET['id']) && $_GET['id'] == 2) { ?>
                    <p class="error"><?php echo "رصيدك غير كافي لإتمام العملية"?></p>
                    <?php } ?>
                    <?php if (isset($_GET['id']) && $_GET['id'] == 3) { ?>
                    <p class="error"><?php echo "حدث خطأ بالعملية الرجاء المحاولة مرة اخرى"?></p>
                    <?php } ?>
                    <?php if (isset($_GET['id']) && $_GET['id'] == 4) { ?>
                    <p class="error"><?php echo "تمت العملية بنجاح"?></p>
                    <?php } ?>
                  <form class="form-signin" action="main/checklogin" method="post">
                    <div class="form-label-group">
                     <label for="inputEmail" ></label>
                    </div>
      
                    <div class="form-label-group">
                     <label for="inputPassword"> </label>
                    </div>
      
                    <a href="main/displayShopingCartItems" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">الرجوع لسلة</a>
                    <a href="main/main" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">الرجوع لصفحة الرئيسية</a>
                    

                 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       
       
      
</body>
</html>

 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<br>
<?PHP
include "app/views/footer.php"; 
?>
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

 