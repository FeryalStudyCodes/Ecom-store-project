<?PHP
 session_start();
include "app/views/header.php"; 

?>
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
              $id = $row->product_id;
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
				<h5><b>السعر : </b> <i class="fas fa-dollar-sign"></i> $ <?php  echo $row->product_price ?></h5>
				<h5><b>العلامة التجارية : </b>  <?php  echo $row->brand_name ?></h5>
				<h5><b>اللون : </b><?php  echo $row->color_name ?></h5>
				<h5><b>متوفر : </b> <?php if($row->is_active==1)  echo "نعم"; else echo "لا"  ?></h5></h5>
				<a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist" class="addtocart"><i class="fa fa-heart"></i>  المفضلة</a>
				<a href="main/shopingCart?id='<?=$id ;?>'" class="buynow"><i class="fa fa-shopping-cart"></i>إضافة لسلة</a>
			</div>
      <?php } }?> 
		</div>
	</div>
	<!-- Product Detail Page End -->


  <br><br><br><br><br><br>
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
