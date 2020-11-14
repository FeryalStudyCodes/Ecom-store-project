<?PHP
session_start(); 
include "app/views/admin/dashboard_contant/top.php"; 
include "app/views/admin/dashboard_contant/navbar.php";
include "app/views/admin/dashboard_contant/sidebar.php";
?>

<div class="row">
      	<div class="col-10 justify-content-center">
      		<h2>Edite Product</h2>
      	</div>
<!-- Edit Product Modal start -->
<div  class="col-10 justify-content-center">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edite Product</h5>
      </div>
      <div class="modal-body">
        <form method='post' action='admin_product/update' enctype="multipart/form-data">
        <?php 
              $i=0;
              $rows=$data['products'];
              foreach($rows as $row)
              {
                
        ?>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
              <input type='hidden' name='product_id' value="<?= $row->product_id?>" >
                <label>Product Name</label>
                <input type="text" class="form-control" name='product_name' value="<?= $row->product_name ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Details</label>
                <input type="text" class="form-control" name='product_details' value="<?= $row->product_details ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <label for="input-select">Category Name</label>
             <select class="form-control" id="input-select" name='category_id'>
             <?php
                  $categoryrows=$data['categories'];
                  foreach($categoryrows as $categoryrow)
                  {
                    echo "<option value=$categoryrow->category_id>$categoryrow->category_name</option>";
                  }
              ?>
              </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <label for="input-select">Brand Name</label>
                <select class="form-control" id="input-select" name='brand_id'>
                <?php
                     $Brandrows=$data['brand'];
                     foreach($Brandrows as $Brandrow)
                      {
                        echo "<option value=$Brandrow->brand_id >$Brandrow->brand_name</option>";
                      }
                ?>
                </select>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Quantity</label>
                <input type="number" name='product_quantity' value="<?= $row->product_quantity ?>" class="form-control" >
              </div>
            </div>
           
            <?php
            $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
            ?>
           <div class="col-12">
              <div class="form-group">
                <label>Product Main Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file"accept="image/*" id="file-ip-1" name="product_main_image" class="form-control" onchange="showPreview(event);" value="<?= $row->product_main_image ?>">
                <br>
                <img src='<?php  echo $imageURl;?>'  class="img-fluid" id="file-ip-1-preview" width="70">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" accept="image/*" multiple id="gallery-photo-add" class="form-control-file" name='product_images[]' value="<?= $row->product_images ?>" >
                <br>
                <div class='gallery'> </div>
                <?php
                $imges = $row->product_images;
                $clean_url=rtrim($imges,',');
                $clean_url=explode(',',$clean_url);
                foreach($clean_url as $part){
                    $product_images='http://localhost:81/Ecom-store-project/app/assets/images/'.$part;
                    echo "<img class='img-fluid' width='50'  src=' $product_images '>";
                }
                echo"<br> ";
                  ?>
              </div>
            </div>
           <div class="col-12">
              <div class="form-group">
                <label>Product Color</label>
                <select class="form-control" id="input-select" name='color_id'>
                <?php
                    $colorrows=$data['color'];
                    foreach($colorrows as $colorrow){echo "<option value=$colorrow->color_id >$colorrow->color_name</option>"; }
                ?>
              </select>
              </div>
            </div>
          <div class="col-12">
              <div class="form-group">
                <label>Product short desc</label>
                <input type="text" class="form-control" name='product_short_desc' value="<?= $row->product_short_desc ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product long desc</label>
                <input type="text" class="form-control" name='product_long_desc' value="<?= $row->product_long_desc ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Price</label>
                <input type="text" class="form-control" name='product_price' value="<?= $row->product_price ?>">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
              <label> <?php if($row->is_active == 1) {echo " its active  " ;}else {echo " its no active ";}?></label>
              </div>
            </div>
           	<div class="col-12">
        			<div class="form-group">
		        		<label> Active </label>
		        		<select class="form-control category_list" name="is_active" >
                <option value="<?= $row->is_active?>"></opiton>
                <option value=1>yes</opiton>
                <option value=0>No</option>
		        		</select>
              </div>
            </div>   
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="submite" class="btn btn-primary submit-edit-product">Update Product</button>
            </div>
          </div>
          <?php $i++; } ?>   
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Product Modal end -->
<!-- footer -->

<?php include "app/views/admin/dashboard_contant/footer.php"; ?>

<script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
               // document.getElementById("img").style.display = "none";
                reader.onload = function(event) {
                    $($.parseHTML('<img width="50">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                
                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
       
    });
});
</script>
<script>
        function showPreview(event){
            if(event.target.files.length >0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display="block";
            }
        } 
    </script>
 </body>
</html>