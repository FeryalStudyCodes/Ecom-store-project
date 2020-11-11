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
  	<!-- content-section-starts -->
	<div class="container">
        <div class="products-page">
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
                            $tree = "<ul>\n";
                            for ($i=0, $ni=count($data); $i < $ni; $i++) {
                                if ($data[$i]->parent_catergory == $parent) {    
                                   
                                    $tree .= "<li><a class='get_cat' href='#' data-id=".$data[$i]->category_id.">\n";
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
             <div class="container">
          <div id="pro">

      
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
              
                           
           
          
         
                  
                


            


 
  
    
    
 

  
<br>
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
