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
 
 
  	<!-- content-section-starts -->
	<div class="container">
        <div class="products-page">
             <div class="products">
                 <div class="product-listy">
                     <h2>الأقسام</h2>
                     <!-- <ul class="product-list">
                        
                         <li class="cat-list"><a href="#">جوالات</a></li>
                         <li class="cat-list"><a href="#">تابلت</a></li>
                         <li class="cat-list"><a href="#">الإكسسوارات</a></li> 
                    </ul> -->
                    <?PHP
                        $rows=$data['categories'];
                        
                        foreach($rows as $row){
                          if($row->parent_catergory==38){
                            echo "<h6> ".$row->category_name."</h6>";
                          }else{
                            echo "<li><a href='categories/'>".$row->category_name."</a></li>";
                          }
                            
                        }
                        ?>
                   
                 </div>
                 <div class="product-listy">
                 <h2>الألوان</h2>
                 <ul class="product-list">
                    
                     <li class="cat-list"><a href="#">أسود </a></li>
                     <li class="cat-list"><a href="#">أزراق</a></li>
                     <li class="cat-list"><a href="#">رمادي</a></li> 
                </ul>
              </div>
                 	
                 <div class="tags">
                         <h4 class="tag_head">العلامة التجارية</h4>
                          <ul class="tags_links">
                             <li><a href="#">ديل</a></li>
                             <li><a href="#">لينوفو</a></li>
                             <li><a href="#">اتش بي</a></li>
                             <li><a href="#">هواوي</a></li>
                             <li><a href="#">آبل</a></li>
                             <li><a href="#">سامسونج</a></li>
                             
                         </ul>
                     
                      </div>
 
             </div>
             <div class="new-product">
             <div class="container">
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
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  <?php  echo $row->product_price ?>
                      
                  </div>
                  <a class="add-to-cart" href="">أضف الى عربة التسوق</a>
                </div>
          </div>
      </div>
      <?php $i++; } }?>  
              <!-- <div class="col-md-3 col-sm-6">
                  <div class="product-store">
                      <div class="product-img">
                          <a href="#">
                              <img class="pic" src="/Ecom-store-project/app/assets/images/dell-10-300x211.jpg">
                          </a>
                          <ul class="social">
                              <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                              <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                              <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                          </ul>
                        
                      </div>
                      <div class="product-content">
                          <h3 class="title"><a href="#">ديل كمبيوتر محمول E7440 معالج كورi5 </a></h3>
                          <div class="price">
                            $260.00
                              
                          </div>
                          <a class="add-to-cart" href="">أضف الى عربة </a>
                        </div>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="product-store">
                    <div class="product-img">
                        <a href="#">
                            <img class="pic" src="/Ecom-store-project/app/assets/images/dell-10-300x211.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                      
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">لينوفو لابتوب 310، بشاشة 14 بوصة ومعالج كور i5/ متعدد الوسائط- اسود</a></h3>
                        <div class="price">
                          $675.74
                            
                        </div>
                        <a class="add-to-cart" href="">أضف الى عربة </a>
                      </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="product-store">
                  <div class="product-img">
                      <a href="#">
                          <img class="pic" src="/Ecom-store-project/app/assets/images/dell-1-20-300x203.jpg">
                      </a>
                      <ul class="social">
                          <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                          <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                          <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                      </ul>
                    
                  </div>
                  <div class="product-content">
                      <h3 class="title"><a href="#">ديل لابتوب لاتيتيود 13 3350 عالج كور i3/ ذاكرة وصول عشوائي سعة 4 جيجابايت</a></h3>
                      <div class="price">
                        $514.74
                          
                      </div>
                      <a class="add-to-cart" href="">أضف الى عربة </a>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="product-store">
                <div class="product-img">
                    <a href="#">
                        <img class="pic" src="/Ecom-store-project/app/assets/images/Dell-Inspiron-11-3162-300x184.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                  
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">
                      إتش بي كمبيوتر محمول إليت بوك 8470p بشاشة قياس 14 إنشاً، معالج كورi5 </a></h3>
                    <div class="price">
                      $202.50
                        
                    </div>
                    <a class="add-to-cart" href="">أضف الى عربة </a>
                  </div>
            </div>
        </div> -->
          </div>
        </div>

<div class="container">
  <div class="row">
      <!-- <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      <img class="pic" src="/Ecom-store-project/app/assets/images/dell-10-300x211.jpg">
                  </a>
                  <ul class="social">
                      <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#">ديل كمبيوتر محمول E7440 معالج كورi5 </a></h3>
                  <div class="price">
                    $260.00
                      
                  </div>
                  <a class="add-to-cart" href="">أضف الى عربة </a>
                </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-store">
            <div class="product-img">
                <a href="#">
                    <img class="pic" src="/Ecom-store-project/app/assets/images/lenovo1.png">
                </a>
                <ul class="social">
                    <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
               
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">لينوفو لابتوب 310، بشاشة 14 بوصة ومعالج كور i5/ متعدد الوسائط- اسود</a></h3>
                <div class="price">
                  $675.74
                    
                </div>
                <a class="add-to-cart" href="">أضف الى عربة </a>
              </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="product-store">
          <div class="product-img">
              <a href="#">
                  <img class="pic" src="/Ecom-store-project/app/assets/images/dell-1-20-300x203.jpg">
              </a>
              <ul class="social">
                  <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                  <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
             
          </div>
          <div class="product-content">
              <h3 class="title"><a href="#">ديل لابتوب لاتيتيود 13 3350 عالج كور i3/ ذاكرة وصول عشوائي سعة 4 جيجابايت</a></h3>
              <div class="price">
                $514.74
                  
              </div>
              <a class="add-to-cart" href="">أضف الى عربة </a>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="product-store">
        <div class="product-img">
            <a href="#">
                <img class="pic" src="/Ecom-store-project/app/assets/images/Dell-Inspiron-11-3162-300x184.jpg">
            </a>
            <ul class="social">
                <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
           
        </div>
        <div class="product-content">
            <h3 class="title"><a href="#">
              إتش بي كمبيوتر محمول إليت بوك 8470p بشاشة قياس 14 إنشاً، معالج كورi5 </a></h3>
            <div class="price">
              $202.50
                
            </div>
            <a class="add-to-cart" href="">أضف الى عربة </a>
          </div>
    </div>
</div> -->
  </div>
</div>

<div class="container">
  <div class="row">
      <!-- <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      <img class="pic" src="/Ecom-store-project/app/assets/images/dell-10-300x211.jpg">
                  </a>
                  <ul class="social">
                      <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#">ديل كمبيوتر محمول E7440 معالج كورi5 </a></h3>
                  <div class="price">
                    $260.00
                      
                  </div>
                  <a class="add-to-cart" href="">أضف الى عربة </a>
                </div>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-store">
            <div class="product-img">
                <a href="#">
                    <img class="pic" src="/Ecom-store-project/app/assets/images/lenovo1.png">
                </a>
                <ul class="social">
                    <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                    <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
               
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">لينوفو لابتوب 310، بشاشة 14 بوصة ومعالج كور i5/ متعدد الوسائط- اسود</a></h3>
                <div class="price">
                  $675.74
                    
                </div>
                <a class="add-to-cart" href="">أضف الى عربة </a>
              </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="product-store">
          <div class="product-img">
              <a href="#">
                  <img class="pic" src="/Ecom-store-project/app/assets/images/dell-1-20-300x203.jpg">
              </a>
              <ul class="social">
                  <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                  <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                  <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
             
          </div>
          <div class="product-content">
              <h3 class="title"><a href="#">ديل لابتوب لاتيتيود 13 3350 عالج كور i3/ ذاكرة وصول عشوائي سعة 4 جيجابايت</a></h3>
              <div class="price">
                $514.74
                  
              </div>
              <a class="add-to-cart" href="">أضف الى عربة </a>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="product-store">
        <div class="product-img">
            <a href="#">
                <img class="pic" src="/Ecom-store-project/app/assets/images/Dell-Inspiron-11-3162-300x184.jpg">
            </a>
            <ul class="social">
                <li><a href="main/product" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                <li><a href="main/wishlist" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
           
        </div>
        <div class="product-content">
            <h3 class="title"><a href="#">
              إتش بي كمبيوتر محمول إليت بوك 8470p بشاشة قياس 14 إنشاً، معالج كورi5 </a></h3>
            <div class="price">
              $202.50
                
            </div>
            <a class="add-to-cart" href="">أضف الى عربة </a>
          </div>
    </div>
</div> -->
  </div>
</div>
                
</div>
              <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>             
           
          
         
                  
                


            


 
  
    
    
 

  

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

    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/all.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Ecom-store-project/app/assets/js/main.js"></script>
   
  </body>
</html>
