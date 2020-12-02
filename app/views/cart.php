<?PHP
include "app/views/header.php"; 
$_SESSION['cart'];

echo "<div class='col-md-12'>";
if($action=='removed'){
    echo "<div class='alert alert-info'>";
    echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";
        echo "Product was removed from your cart!";
    echo "</div>";
}

else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
    echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";
        echo "Product quantity was updated!";
    echo "</div>";
}
else if($action=='emptyitem'){
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-danger'>";
    echo "<a class='close'data-dismiss='alert' raia-label='close'>X</a>";
        echo "No products found in your cart!";
    echo "</div>";
echo "</div>";
}
echo "</div>";

?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
       
        </div>
        <br><br><br><br><br><br>
        <?PHP
                $rows = $data['cartItems']; 
               // print_r($rows);
             if($rows == "empty")
             {
              echo "<div class='alert alert-info'>";
              echo "Sorry you Don't Have any Items";
              echo "</div>"; 
            ?>
            
                <?PHP
                  } 
                  else{?>
        <div class="table-responsive mt-2">
        <form method='post' action='main/checkout'>
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0"  >محتويات سلّة التسوق</h4>
                </td>
              </tr>
              <tr>
                <th>#</th>
                <th>الصورة</th>
                <th>منتج</th>
                <th>سعر الوحدة</th>
                <th>الكمية</th>
                <th>إجمالي السعر</th>
                <th>  </th>

               
              </tr>
            </thead>
            <tbody>
       <?PHP
       $total=0;
       $item_count=0;
       $i=1;
       foreach($rows as $row){
        $id = $row->product_id;
        $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
           $quantity=$_SESSION['cart'][$row->product_id]['quantity'];
           $sub_total=$row->product_price*$quantity;
       ?>
              <tr>
                <td><?= $i; ?></td>
               <td  class="something"> <img src='<?= $imageURl; ?>'  >
               <input type="hidden" name="product[]" class="product-id" value="<?= $id?>"></td>
                
                <td><?=$row->product_name?></td>
                <td>$<?= $row->product_price ?></td>
                <input type="hidden" class="pprice" value="">
                <td>
                  <input type="number"  class="form-control cart-quantity" name="q[]" value="<?= $quantity ?>"style="width:75px;">
                </td>
                <td>$<?= $sub_total?></td>
                <td>
                  <a href='#'  class="delete text-danger lead" >
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
                  <a href="main/main"  style='background-color: #A01C86; border:#A01C86;'class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;تابع التسوق</a>
                </td>
                <td colspan="2"><b>التكلفة الإجمالية</b></td>
                <td>  <h4 class='m-b-10px'><?="  ".$item_count?>items</h4>
                    <h4 name="cost" >$<?=number_format($total, 2, '.', ',') ?></h4></td>
                    <?PHP $order_date=date("Y-m-d"); ?>
                    <input type="hidden" checked="" class="custom-control-input" name='order_date' value= <?PHP echo $order_date; ?>>    							
            
                    <input type="hidden" name="cost" class="product-id" value="<?= $total?>"></td>
                <td>
                <i class="far fa-credit-card"></i>&nbsp;&nbsp;
                <input type='submit' type='submit' style='background-color: #F89132; border:#F89132;' value=' إتمام الشراء' class='btn btn-primary add_product'>
                </td>
              </tr>
            </tbody>
            </form>
          </table>
        </div>
        <?PHP } ?>
       
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>
<?PHP
include "app/views/footer.php"; 
?>
   <script>
$(document).ready(function(){
 // delet the item quantity
$('.delete').click(function(){
  var el = this;
  var $el = $(this).closest('tr');  
  var id = $el.find(".product-id").val();
 // alert(id)
  var confirmalert = confirm("هل تريد حذف المنتج من سلة الشراء ؟");
  if (confirmalert == true) {
     // AJAX Request
     $.ajax({
       url: 'main/removeShopingCartItems?id=' + id,
       type: 'POST',
       data: { id:id },
       success: function(data){
        document.getElementById("comparison-count").innerHTML=data;
        $(el).closest('tr').fadeOut(800,function(){
	       $(this).remove();
                    });
       }
     });
  }
});
     // Change the item quantity
   /*  $(".cart-quantity").on('change', function() {
      var $el = $(this).closest('tr');
      var id = $el.find(".product-id").val();
      var quantity = $el.find(".cart-quantity").val();
    /  $.ajax({
        url: 'main/updateShopingCartItems?id=' + id + '&quantity=' + quantity,
        method: 'post',
        cache: false,
        data: {
          id: id,
          quantity: quantity
        },
        success: function(response) {
          setInterval('refreshPage()', 200);
        }
      });
    });*/
 
})
function refreshPage() {
    location.reload(true);
}
</script>
<script>
$(document).ready(function(){
   
$(".cart-quantity").on('change', function() {
 
 // get basic information for updating the cart
 var $el = $(this).closest('tr');
 var id = $el.find(".product-id").val();
      var quantity = $el.find(".cart-quantity").val();
 // redirect to update_quantity.php, with parameter values to process the request
 window.location.href = "updateShopingCartItems?id=" + id + "&quantity=" + quantity;

});
 
})
</script>
</body>

</html>
