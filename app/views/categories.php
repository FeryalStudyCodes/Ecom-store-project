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
                                   
                                    $tree .= "<li><a class='get_cat' href=main/getcat?action=getcat&category_id=".$data[$i]->category_id." data-id=".$data[$i]->category_id.">\n";
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

  <div class="row">
  <?php 
            $i=0;
            $rows=$data['category'];
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>

                  </ul>
                 
              </div>
              <div class="product-content">
   </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
           // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
           echo "<a  class='add-to-cart' href='main/categorycart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

               // echo "Update Cart";
            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/categorycart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>

  
 
 
                  
               
<?PHP
include "app/views/footer.php"; 
?>   
  </body>
</html>
