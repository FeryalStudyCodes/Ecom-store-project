<?PHP
session_start();
include "app/views/header.php"; 
?>
   
   <div class="spacer">
    &nbsp;
</div>
  	<!-- content-section-starts --> 
	<div class="container-fluid">
        <div class="products-page ">
             <div class="products">
                 <div class="product-listy">
                     <h2>الأقسام</h2>
                     <?PHP
                        $rows=$data['categories'];
                       // print_r($rows);
                        echo (generateTree($rows));
                        function generateTree($data, $parent = 0, $depth=0)
                        {
                          //  isset($_POST["selectBrand"]
                          //  $sql = "SELECT * FROM products WHERE product_cat = '$id'";
                            $tree = "<ul class='product-list'>\n";
                            for ($i=0, $ni=count($data); $i < $ni; $i++) {
                                if ($data[$i]->parent_catergory == $parent) {    
                                   
                                    $tree .= "<li class='cat-list'><a class=' get_cat ' href=main/getcat?action=getcat&category_id=".$data[$i]->category_id." data-id=".$data[$i]->category_id.">\n";
                                    $tree .= $data[$i]->category_name;
                                    $tree .= generateTree($data, $data[$i]->category_id, $depth+1);
                                    $tree .= "</li></a>\n";
                                }
                            }
                            $tree .= "</ul>\n";
                            return $tree;
                        }
                        ?>
                 </div>
             </div>
             
             <div class="new-product">
            <!--Satrt Featured Product-->
 <div class="container" style="padding: 0rem;">
  <!-- <h3 class="h4 text-sm-right mb-5 text-secondary ">إلكترونيات  </h3>     -->
  <div class="active row orginize card-slider">
    <main class="row main bg-grid product-store">
  <?php 
            $i=0;
            $rows=$data['category'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
         <div class="col-md-3 col-sm-6 col-lg-3">
          <div class="card">
              <div class="card-img product-img">
                  <a href="#">
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social" >
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <?PHP
                      if(array_key_exists($id, $_SESSION['wish'])){
                      echo " <li><a style='color:blue' class='Wishlist' id='wishlisticon' data-id='$id' data-tip='Add to Wishlist'><i class='fa fa-heart'></i></a></li>";
                      }
                      else{
                        echo " <li><a  class='Wishlist' id='wishlisticon' data-id='$id' data-tip='Add to Wishlist'><i class='fa fa-heart'></i></a></li>";
                     
                      }
                      ?>
                      <?PHP
                      if(array_key_exists($id, $_SESSION['cart'])){
                      echo "<li><a style='color:blue' data-tip='Add to Cart' class='cart' id='shope' data-id='$id'><i class='fa fa-shopping-cart'></i></a></li>";
                      }
                      else{
                        echo "<li><a data-tip='Add to Cart' class='cart' id='shope' data-id='$id'><i class='fa fa-shopping-cart'></i></a></li>";
                      
                      }
                      ?>
                 </ul>
              
              </div>
              <div class="card-price product-content">
               <div class="card-name title">
                  <h3 class="title"><a href="#"><p><?php  echo $row->product_short_desc ?></p></a></h3>
                  <div class="price">
                  <p>$<?= $row->product_price ?></p>
                    <!-- <?php  echo $row->product_price ?> -->
                  </div>
                  <?PHP
                    echo "<div class='product-id display-none'></div>";
                    if(array_key_exists($id, $_SESSION['cart'])){
                      echo "<a  style='background-color:#F58B20;color:white;' id='shopebtn' class='cart add-to-cart' class='btn btn-primary w-100-pct'>أضف الى عربة </a>";
                      echo "</a>";
                    }else{
                        echo "<a  class='cart add-to-cart' id='shopebtn' class='btn btn-primary w-100-pct'>أضف الى عربة </a>";
                    }
                ?>
                       </div>
                 </div>
             </div>
             </div>
             <?php $i++; } ?> 
          </div>

                           
           
          
   <!-- <script>
$(document).ready(function(){
            // add the item to cart
            $('.cart').click(function(){
              var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: 'main/shopingCart?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  alert(response);
                }
             });
          });
          // add the item to Wishlist
          $('.Wishlist').click(function(){
              var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: 'main/wishlist?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  alert(response);
                }
             });
          });
})

</script>       -->

<script>
$(document).ready(function(){
            // add the item to cart
            $('.cart').click(function(){
              var id = $(this).data('id');
            $.ajax({
                url: 'main/shopingCart?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  if(response == 0){
                   alert("تم اضافة المنتج مسبقاً");
                  }
                  else{
                   alert("تم إضافة المنتج الى السلة  ");
                    document.getElementById("comparison-count").innerHTML=response;
                    document.getElementById("shope").style.color = "blue";
                    document.getElementById("shopebtn").style.backgroundColor = "red";
                    
                  }
                }
             });
          });
          // add the item to Wishlist
          $('.Wishlist').click(function(){
              var id = $(this).data('id');
            $.ajax({
                url: 'main/wishlist?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  if(response == 0){
                   alert("تم اضافة المنتج مسبقاً");
                  }
                  else{
                   alert("تم إضافة المنتج الى المفضلة  ");
                    document.getElementById("wishcomparison-count").innerHTML=response;
                    document.getElementById("wishlisticon").style.color = "blue";
                  }
                }
             });
          });
})
</script>
                  
                


            


 
  
    
    
 

  
<br><br><br><br><br><br><br><br>

<?PHP
include "app/views/footer.php"; 
?>

<script>
$(document).ready(function(){
// Delete brand 
$('.get_cat').click(function(){
  var el = this;
  
  //var deleteid = $(this).attr('id');
  var cat_id = $(this).data("id");
  //alert(cat_id);
  
     // AJAX Request
     $.ajax({
       url: 'main/getcat',
       type: 'POST',
       data: { category_id:cat_id },
       success: function(data){
       // alert(data);  
        $("#pro").html(data);
         }
     });
});
});
</script>
   
  </body>
</html>
