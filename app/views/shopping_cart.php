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
  <script src="/Ecom-store-project/app/assets/js/render.js"></script>
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/bootstrap.css" />
       <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" href="/Ecom-store-project/app/assets/css/style.css" />


  </head>
  <body onload="doShowAll()">

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
         <li class="nav-item">
           <a class="nav-link" href="views/main.php">الرئيسية <span class="sr-only"></span></a>
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
           <a class="nav-link" href="#">المدونة</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">صفحات</a>
         </li>
        
         <li class="nav-item">
           <a class="nav-link" href="#">تواصل معنا</a>
         </li>
         <li class="nav-item active">
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

<!-- cart-items details beginning-->

  <div class="container">

          <div class="row">
            <div class="col-md-12  text-right">
              <h2 style="margin-bottom:30px ;">سلة المشتريات</h2>
            
            </div>
            <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <tr class="bg-light">
                    <th scope="col" width="10">الرقم</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الإجمالي</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="cart_list">
                 <?php
                    $rows=$data['cart'];
                    $i=0;
                    $r=1;
                    foreach($rows as $row)
                      {       
                        $id = $row->cart_id;
                  ?>
                    <tr>
                    <th scope="row" width="10" id='<?= $id; ?>'><?php  echo $r ?></i></th>
                    <td width="40"><img src="/Ecom-store-project/app/assets/images/Asus.jpg" height="80"></td>
                    <td width="110"><?php  echo $row->product_name ?></td>
                    <td width="40"><?php  echo $row->quantity ?></td>
                    <td width="40"><?php  echo $row->amount ?></td>
                    <td width="40"><?php  echo $total=quantity * amount ?></td>
                    <th scope="row" width="50"><a href="#" data-toggle="tooltip" data-placement="top" title="Remove"><i  class="fa fa-times-circle-o"></a></i></th>
                    </tr>
                  <?php $i++; $r++; } ?> 
                </tbody>
                </table>
            </div>
          </div>
        </div>


<!-- <div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>سلة المشتريات</h1>
        <a href="?c=cart&a=Checkout" class="btn btn-success"><i class="fa fa-shopping-cart"></i> تأكيد الطلب</a>
        <a href="?c=cart&a=Empty" class="btn btn-danger"><i class="fa fa-trash"></i> حذف السلة</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>المنتج</th>
              <th>الكمية</th>
              <th>السعر</th>
              <th>الإجمالي</th>
              <th class="no-sort"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($MODEL as $article) { 
            ?>
              <tr>
                <td><?=$article->getCode()?></td>
                <td><?=$article->getBrand()?></td>
                <td><?=$article->getDescription()?></td>
                <td><?=$article->getPrice()?></td>
                <td><a href="?c=cart&a=RemoveArticle&id=<?=$article->getCartUniqueId()?>" class="btn btn-danger btn-sm fa fa-minus-circle"></a></td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="text-align:right;" colspan="3">Total:</th>
              <td><?= array_sum(array_map(function ($element) { return $element->getPrice(); }, $MODEL));?></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </section>
  </div>
</div> -->

<!-- cart-items details ending-->


<div class="footer mb-12" style="background-color: white;">
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
    
</body>
</html>