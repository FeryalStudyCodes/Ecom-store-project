<?PHP
$action = isset($_GET['action']) ? $_GET['action'] : "";
$_SESSION['cart'];

/*$total=0;
$item_count=0;
$rows = $data['cartItems'];
foreach($rows as $row){
    $quantity=$_SESSION['cart'][$row->product_id]['quantity'];
    $sub_total=$row->product_price*$quantity;
    print_r($_SESSION['cart'][$row->product_id]['quantity']);
    // =================
    echo "<div class='cart-row'>";
        echo "<div class='col-md-8'>";
            echo "<div class='product-name m-b-10px'><h4>{$row->product_name}</h4></div>";         
            // update quantity
            echo "<form class='update-quantity-form'>";
                echo "<div class='product-id' style='display:none;'>{$row->product_id}</div>";
                echo "<div class='input-group'>";
                    echo "<input type='number' name='quantity' value='{$quantity}' class='form-control cart-quantity' min='1' />";
                        echo "<span class='input-group-btn'>";
                            echo "<button class='btn btn-default update-quantity' type='submit'>Update</button>";
                        echo "</span>";
                echo "</div>";
            echo "</form>";
            // delete from cart
            echo "<a href='remove_from_cart.php?id={$row->product_id}' class='btn btn-default'>";
                echo "Delete";
            echo "</a>";
        echo "</div>";
        echo "<div class='col-md-4'>";
            echo "<h4>$" . number_format($row->product_price, 2, '.', ',') . "</h4>";
        echo "</div>";
    echo "</div>";
    // =================
    $item_count += $quantity;
    $total+=$sub_total;
}
echo "<div class='col-md-8'></div>";
echo "<div class='col-md-4'>";
    echo "<div class='cart-row'>";
        echo "<h4 class='m-b-10px'>Total ({$item_count} items)</h4>";
        echo "<h4>$" . number_format($total, 2, '.', ',') . "</h4>";
        echo "<a href='checkout.php' class='btn btn-success m-b-10px'>";
            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Checkout";
        echo "</a>";
    echo "</div>";
echo "</div>";
*/
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://localhost/Ecom-store-project/app/assets/css/bootstrap.css" />
       <link rel="stylesheet" href="http://localhost/Ecom-store-project/app/assets/css/font-awesome.css">
    <link rel="stylesheet" href="http://localhost/Ecom-store-project/app/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/Ecom-store-project/app/assets/css/smoothproducts.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Ecom-store-project/app/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/Ecom-store-project/app/assets/css/style.css" />


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
            <button class="get-quote"> <a class="usr-login" href="main/login"><i class="fa fa-user"></i> دخول</a></button>
            
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
<?PHP
echo "<div class='col-md-12'>";
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "Product was removed from your cart!";
        echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

    echo "</div>";
}

else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo "Product quantity was updated!";
        echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

    echo "</div>";
}
else if($action=='emptyitem'){
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-danger'>";
        echo "No products found in your cart!";
        echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";

    echo "</div>";
echo "</div>";
}
echo "</div>";

?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
       
        </div>
        <div class="table-responsive mt-2">
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">محتويات سلّة التسوق</h4>
                </td>
              </tr>
              <tr>
                <th>#</th>
                <th>الصورة</th>
                <th>منتج</th>
                <th>سعر الوحدة</th>
                <th>الكمية</th>
                <th>إجمالي السعر</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;إفراغ سلّة التسوق</a>
                </th>
              </tr>
            </thead>
            <tbody>
       <?PHP
       $total=0;
       $item_count=0;
       $rows = $data['cartItems'];
       $i=1;
       foreach($rows as $row){
        $id = $row->product_id;
        $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
           $quantity=$_SESSION['cart'][$row->product_id]['quantity'];
           $sub_total=$row->product_price*$quantity;
       ?>
              <tr>
                <td><?= $i; ?></td>
               <td> <img  width="60"  src='<?= $imageURl; ?>'>
               <input type="hidden" class="product-id" value="<?= $id?>"></td>
                
                <td><?=$row->product_name?></td>
                <td>$<?= $row->product_price ?></td>
                <input type="hidden" class="pprice" value="">
                <td>
                  <input type="number" class="form-control cart-quantity" value="<?= $quantity ?>"style="width:75px;">
                </td>
                <td>$<?= $sub_total?></td>
                <td>
                  <a href='removeShopingCartItems?id=<?=$row->product_id?>'  class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');">
                  <i class="fas fa-trash-alt"></i></a>
                  
                </td>
              </tr>
       <?PHP
       $i++;
       $item_count += $quantity;
    $total+=$sub_total; 
    }?>
            
              <tr>
                <td colspan="3">
                  <a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;تابع التسوق</a>
                </td>
                <td colspan="2"><b>التكلفة الإجمالية</b></td>
                <td>  <h4 class='m-b-10px'><?="  ".$item_count?>items</h4>
                    <h4>$<?=number_format($total, 2, '.', ',') ?></h4></td>
                <td>
                  <a href="checkout.php" class="btn btn-info "><i class="far fa-credit-card"></i>&nbsp;&nbsp;إتمام الشراء</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://localhost/Ecom-store-project/app/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/Ecom-store-project/app/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="http://localhost/Ecom-store-project/app/assets/js/all.js"></script>
    <script type="text/javascript" src="http://localhost/Ecom-store-project/app/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="http://localhost/Ecom-store-project/app/assets/js/main.js"></script>
   <script>
$(document).ready(function(){
   
$(".cart-quantity").on('change', function() {
 
 // get basic information for updating the cart
 var $el = $(this).closest('tr');
 var id = $el.find(".product-id").val();
      var quantity = $el.find(".cart-quantity").val();

 // redirect to update_quantity.php, with parameter values to process the request
 window.location.href = "updateShopingCartItems?id=" + id + "&quantity=" + quantity;
 //return false;
      });
 
})
</script>
 
</body>

</html>
