<?PHP
session_start();
include "app/views/header.php"; 
?>
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
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
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
                  $<?= $row->product_price ?>
                    <!-- <?php  echo $row->product_price ?> -->
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
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
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
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
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
                   $ <?php  echo $row->product_price ?>
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

<!-- start Adds -->
<section class="three-column-images mt-5">
  <div class="container " >
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <img src="app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
         
      </div>
   
       <div class="col-xs-6 col-sm-4">
        <img src="app/assets/images/add2.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
   
      <div class="col-xs-6 col-sm-4">
        <img src="app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
      </div> 
     </div>  
  </section>
<!-- End Adds -->


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
  <!-- <h3 class="h4 text-sm-right mb-5 text-secondary ">إلكترونيات  </h3>     -->
  <div class="row">
  <?php 
            $i=0;
            $rows=$data['order_product'];
            // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              // if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
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
                  $ <?php  echo $row->product_price ?>

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
      <?php  } ?> 

  </div>
</div>
<!--End Featured Product-->

<!--Start View Moer-->
<div class="overview text-center mt-5">
         <div class="container">
          
           <button><a href="main/getcat">عرض المزيد</a></button>
          </div>
       </div>

<!--End View Moer-->


<!-- start Adds -->
<section class="three-column-images mt-5">
  <div class="container " >
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <img src="http://localhost/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
         
      </div>
   
       <div class="col-xs-6 col-sm-4">
        <img src="http://localhost/Ecom-store-project/app/assets/images/add2.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
   
      <div class="col-xs-6 col-sm-4">
        <img src="http://localhost/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
      </div> 
     </div>  
  </section>
<!-- End Adds -->




      
  <!-- <div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" width="100%" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
    	<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
	    <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="/Ecom-store-project/app/assets/images/barndsam.png" /></div>
    </div>
</div> -->
   







    
<?PHP
include "app/views/footer.php"; 
?>   
  </body>
</html>
