<!DOCTYPE html>
<html lang="en" dir="rtl">
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
                <?PHP
                        $rows=$data['categories'];
                        
                        foreach($rows as $row){
                          if($row->parent_catergory==0){
                            echo "<h6> ".$row->category_name."</h6>";
                          }else{
                            echo "<li><a href='main/categories'>".$row->category_name."</a></li>";
                          }
                            // echo "<li><a href=''>$row->category_name</a></li>";
                            // " 
                            // <li><a href="main/categories">جوالات</a></li>
                            // <li><a href="main/categories">تابلت</a></li>
                            // <li><a href="main/categories">الإكسسوارات</a></li> "
                        }
                        ?>
           
                  
                </ul>
              </div>
              <div class="col-sm-4">
                <ul class="multi-column-dropdown">
            <!-- <h6>أجهزة لابتوب و كمبيوتر</h6>
                  <li><a href="main/categories">أجهزة لابتوب</a></li>
                  <li><a href="main/categories">أجهزة كمبيوتر</a></li>
                  <li><a href="main/categories">اكسسوارات الكمبيوتر</a></li>
                  <li><a href="main/categories">ماسحات ضوئية</a></li> -->
                  
                </ul>
              </div>
              <div class="col-sm-4">
                <ul class="multi-column-dropdown">
            <!-- <h6>كاميرات</h6>
                  <li><a href="main/categories">ذواكر كاميرا</a></li>
                  <li><a href="main/categories">كاميرات درونز</a></li>
                  <li><a href="main/categories">كاميرات أكشن</a></li>
                  <li><a href="main/categories">كاميرات مدمجة</a></li> -->
                </ul>
              </div>
            
        <div class="clearfix"></div>
            </div>
          </ul>
          <!-- <ul class="dropdown-menu multi-column columns-3">
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
          </ul> -->
      </li>
    
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="#">العروض</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">صفحات</a>
         </li>
        
         <li class="nav-item">
           <a class="nav-link" href="#">تواصل معنا</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i><span class="ty-minicart-count">1</span></a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="#"><i class="fa fa-heart"></i><span class="ty-miniwish-count">1</span></a>
        </li>
        <div class="buscar-caja"> 
          <input type="text" name="" class="buscar-txt" placeholder="Search ....."/> 
          <a class="buscar-btn"> <i class="fa fa-search"></i> </a> 
          
      </div>
       </ul>
     </div>
   </div>
   </nav>

   <!-- end Navbar -->
 


  <!-- Product Detail Page Start -->
	<div class="product-detail">
		<div class="container">
    
         <?php 
             $rows=$data['products'];
            // echo "<br>". $rows['key']->product_id."<br>";
            
           // print_r($rows);
            foreach($rows as $row)
            {
              //echo "<br>". $row->product_id."<br>";
           if ($row->product_id == $_GET['product_id']){
            $mainimageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
			<div class="product-detail-left">
				<div class="sp-loading">
          <img src="/Ecom-store-project/app/assets/images/sp-loading.gif">
					تحميل الصورة
				</div>
			 <div class="sp-wrap">
        <a href='<?php  echo  $mainimageURl ?>'><img src='<?php echo $mainimageURl ?>' alt=""></a>
        <?php
            $imges = $row->product_images;
            $clean_url=rtrim($imges,',');
            $clean_url=explode(',',$clean_url);
            foreach($clean_url as $part){
            $product_images='http://localhost:81/Ecom-store-project/app/assets/images/'.$part;
            echo "<a href='$product_images'><img src='  $product_images'></a>"
            ;}?> 
				</div>
			</div>
			<div class="product-detail-right">
      
			<h3><?php  echo $row->product_short_desc ?></h3> 
				<h5><b>السعر : </b> <i class="fas fa-dollar-sign"></i>  <?php  echo $row->product_price ?></h5>
				<h5><b>العلامة التجارية : </b>  <?php  echo $row->brand_name ?></h5>
				<h5><b>اللون : </b><?php  echo $row->color_name ?></h5>
				<h5><b>متوفر : </b> <?php if($row->is_active==1)  echo "نعم"; else echo "لا"  ?></h5></h5>
				<a href="#" class="addtocart"><i class="fa fa-heart"></i>  المفضلة</a>
				<a href="#" class="buynow"><i class="fa fa-shopping-cart"></i> أشتري الآن</a>
			</div>
      <?php } }?> 
			<!-- <div class="product-detail-feature">
				<h3>الوصف</h3>
				<p>العلامة التجارية : Apple</p>
				<p>البلوتوث : نعم</p>
				<p>الواي فاي : نعم</p>
				<p>الكاميرا : نعم</p>
				<p>السماعات : نعم</p>
				<p>الميكروفون : نعم</p>
				<p>رقم المعالج : 2</p>
				<p>المعالج : Intel Core i7</p>
				<p>الذاكرة العشوائية : GB8</p>
				
			</div> -->
   
		</div>
	</div>
	<!-- Product Detail Page End -->



 
  
    
    
 

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
    <script src="/Ecom-store-project/app/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/Ecom-store-project/app/assets/js/jquery.cycle.js"></script>
    <script src="/Ecom-store-project/app/assets/js/owl.carousel.min.js"></script>
    <script src="/Ecom-store-project/app/assets/js/smoothproducts.min.js"></script>
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
