<?PHP
include "app/views/header.php"; 
$_SESSION['wish'];
?>

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
    echo "<a class='close' data-dismiss='alert' aria-label='close'>x</a>";
    echo "No products found in your wishlist!";
    echo "</div>";
echo "</div>";
}
echo "</div>";

?>
  	
      
  <!-- checkout Page Start -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12  text-right">
              <h2 style="margin-bottom:30px ;"> قائمة المفضلة</h2>
            <br><br><br><br><br><br>
            </div>
            <?PHP
             $rows = $data['wishlisttItems']; 
             if($rows == "empty")
             {
              echo "<div class='alert alert-info'>";
              echo "Sorry you Don't Have any Items";
              echo "</div>"; 
            ?>
            
                <?PHP
                  } 
                  else{?>
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
                    <?PHP $i++; }}?>
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
