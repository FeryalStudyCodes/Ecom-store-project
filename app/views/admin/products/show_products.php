 <!-- header and sidebar -->
 <?PHP
 session_start(); 
include "app/views/admin/dashboard_contant/top.php"; 
include "app/views/admin/dashboard_contant/navbar.php";
include "app/views/admin/dashboard_contant/sidebar.php";
?>
      <div class="row">
      	<div class="col-10">
      		<h2>Product List</h2>
          <div class="form-group">
       
                        </div>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Product</a>
      	</div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Details</th>
              <th>Category</th>
              <th>Brand</th>
              <th>Quantity</th>
              <th>main_image</th>
             
              <th>Price</th>
              <th>Active</th>
              <th>Creation Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="product_list">
          <?php 
         
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
              <tr>
                <td></td>
                <td> <?php  echo $row->product_name ?> </td>
                <td> <?php  echo $row->product_details ?> </td>
                <td> <?php  echo $row->category_name ?> </td>
                <td> <?php  echo $row->brand_name ?> </td>
                <td> <?php  echo $row->product_quantity ?> </td>
                <td> <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'> </td>
                <td> 
                  </td>
                <td> <?php  echo $row->product_price ?> </td>
                <td> <?php if($row->is_active == 1) echo " active "; else echo " not active ";?> </td>
                <td> <?php  echo $row->creation_date ?> </td>
                <td><button type="button" id="<?php echo $row->product_name ?>" class='delete_product btn-sm btn btn-danger' data-id='<?= $id; ?>'><i class="fas fa-trash-alt"></i></button>
                <a href="admin/admin_product/edite_product?action=edite_product&product_id=<?PHP echo $id?>"  class="btn btn-sm btn-info edit_product"  data-id='<?= $id; ?>' style="color:#fff;" ><i class="fas fa-pencil-alt"></i></a>
                </td> </tr> 
          <?php $i++; } ?> 
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<!-- Add Product Modal start -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
     <h5 class="card-header">product Form</h5>
     <div class="card-body">
                  <form method='post' action='admin_product/add' enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product Name : </label>
                            <input  type="text" id="product_name" class="form-control" name='product_name'>
                        </div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product details  : </label>
                            <input type="text" id="product_details" class="form-control" name='product_details'>
                        </div>
                        <div class="form-group">
                                    <label for="input-select">Category</label>
                                    <select class="form-control" id="category_id" name='category_id'>
                                    <?php
                                    $rows=$data['categories'];
                                    foreach($rows as $row)
                                    {
                                    echo "
                                    <option value=$row->category_id>$row->category_name</option>";
                                     }
                                    ?>
                                    </select>
                        </div>
                        <div class="form-group">
                                    <label for="input-select">Brand</label>
                                    <select class="form-control" id="brand_id" name='brand_id'>
                                   
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">product_quantity : </label>
                            <input  type="text" id="product_quantity" class="form-control" name='product_quantity'>
                        <div>
                          <br>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Main Image<small>(format: jpg, jpeg, png)</small></label>
                            <input type="file" id="file-ip-1" onchange="showPreview(event);"  accept="image/*" class="form-control-file" name='product_main_image'> 
                           <br>
                            <img  class="img-fluid" id="file-ip-1-preview" width="70">
                        </div>
                        <div class="form-group">
                        <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                        <input type="file" accept="image/*" multiple id="gallery-photo-add" class="form-control-file" name='product_images[]' value="<?= $row->product_images ?>" >
                        <br>
                        <div class='gallery'> </div>
                        </div>
                        <div class="form-group">
                                    <label for="input-select">color</label>
                                    <select class="form-control" id="color_id" name='color_id'>
                                    <?php
                                  $rows=$data['color'];
                                    foreach($rows as $row)
                                    {
                                    echo "
                                    <option value=$row->color_id >$row->color_name</option>";
                                     }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product_short_desc : </label>
                            <input id="product_short_desc" type="text" class="form-control" name='product_short_desc'>
                        <div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product_long_desc : </label>
                            <input id="product_long_desc" type="text" class="form-control" name='product_long_desc'>
                        <div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product_price : </label>
                            <input id="product_price" type="text" class="form-control" name='product_price'>
                        <div>
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" id="is_active" class="custom-control-input" name='is_active' value=1>
                        <span class="custom-control-label">is Active</span>
                        </label>                     
                        <?PHP $creation_date=date("Y-m-d"); ?>
                        <input type="hidden" id="creation_date" class="custom-control-input" name='creation_date' value= <?PHP echo $creation_date; ?>>    							
                        <input type='submit' type='submit' value='add product' class='btn btn-primary add_product'>
                  </form>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

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
<script type="text/javascript">
           $(document).ready(function(){
           	   $("#category_id").change(function(){
                     var category_id=$("#category_id").val();
           	   	     $.ajax({
                      url:"admin/admin_product/getBrand",
           	   	     	type:"post",
                      data: { category_id :category_id },
           	   	     	success:function(data){
                         //  alert(data);
                         $("#brand_id").html(data);
           	   	     	}
           	   	     });
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
    <script>
    $(document).ready(function(){
      
      // Delete Category 
       $('.delete_product').click(function(){
        var el = this;
        // Delete id
        var deleteid = $(this).data('id');
        var category_name = $(this).attr("id");
        var confirmalert = confirm("Are you sure you want to delet  "+category_name+" ?");
        if (confirmalert == true) {
          // AJAX Request
          $.ajax({
            url: 'admin/admin_product/delete',
            type: 'POST',
            data: { product_id :deleteid },
            success: function(data){
              if(data = 1){
                alert("deleted successfuly");
                $(el).closest('tr').fadeOut(800,function(){
              $(this).remove();
                    });
              }
              else{
                alert("sorry you can deleted "+data);
               
              }
            }
          });
        }
      });
       // Add Category

});
function refreshPage() {
    location.reload(true);

}
    
    

    </script>
<!-- end footer -->
 </body>
</html>
                
             