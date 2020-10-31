<?php //session_start(); ?>
<!-- Top -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
      .fa-trash-alt,.fa-pencil-alt{
        color: #fff;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .edit_product
      {
        margin-top: 10;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="http://localhost/Ecom-store-project/app/assets/css/admin/dashboard.css" rel="stylesheet">
  </head>
 <body>
 <!-- end Top -->
 <!-- Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">login Store</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	
      
    </li>
  </ul>
</nav>
<!-- end Navbar -->
<!-- sidebar -->
<div class="container-fluid">
  <div class="row">
    <?php //include "../dashboard_contant/sidebar.php"; ?>
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 
            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>

          <li class="nav-item">
            <a >
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == '') ? 'active' : ''; ?>" href="http://localhost/Ecom-store-project/admin/admin_product/index">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'brands.php') ? 'active' : ''; ?>" href="http://localhost/Ecom-store-project/admin/admin_brand/index">
              <span data-feather="shopping-cart"></span>
              Brands
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="http://localhost/Ecom-store-project/admin/admin_cat/show">
              <span data-feather="shopping-cart"></span>
              Categories
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hello <?php //echo $_SESSION["admin_name"]; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
<!-- end sidebar -->
      <div class="row">
      	<div class="col-10">
      		<h2>Product List</h2>
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
              <th>images</th>
              <th>Short Desc</th>
              <th>Long Desc</th>  
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
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
              <tr>
                <td></td>
                <td> <?php  echo $row->product_name ?> </td>
                <td> <?php  echo $row->product_details ?> </td>
                <td> tel </td>
                <td> sam </td>
                <td> <?php  echo $row->product_quantity ?> </td>
                <td> <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'> </td>
                <td><?php
                        $imges = $row->product_images;
                        $clean_url=rtrim($imges,',');
                        $clean_url=explode(',',$clean_url);
                        foreach($clean_url as $part){
                        $product_images='http://localhost/Ecom-store-project/app/assets/images/'.$part;
                        echo "<img width='60' height='60' src=' $product_images'>";}?> 
                </td>
                <td> <?php  echo $row->product_short_desc ?> </td>
                <td> <?php  echo $row->product_long_desc ?> </td>
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
                                    <?php
                                    $rows=$data['brand'];
                                    foreach($rows as $row)
                                    {
                                    echo "
                                    <option value=$row->brand_id >$row->brand_name</option>";
                                     }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">product_quantity : </label>
                            <input  type="text" id="product_quantity" class="form-control" name='product_quantity'>
                        <div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">main image</label>
                            <input type="file" id="product_main_image" accept="image/*" class="form-control-file" name='product_main_image'> 
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">images</label>
                            <input type="file" id="product_images" accept="image/*" multiple class="form-control-file" name='product_images[]'>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	
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
        $('.add_product').click(function(){   
        var el = this;
                var product_name = $('#product_name').val();
                var product_details = $('#product_details').val();
                var category_id = $('#category_id').val();
                var brand_id = $('#brand_id').val();
                var product_quantity = $('#product_quantity').val();
                var product_main_image = $('#product_main_image').val();
                var product_images = $('#product_images[]').val();
                var color_id = $('#color_id').val();
                var product_short_desc = $('#product_short_desc').val();
                var product_long_desc = $('#product_long_desc').val();
                var product_price = $('#product_price').val();
                var is_active = $('#is_active').val();
                var creation_date = $('#creation_date').val();
                alert(product_images);
                   /* $.ajax({
                      url : 'admin/admin_product/add',
                      method : 'POST',
                      data : {
                         product_name:product_name,
                         product_details:product_details,
                         category_id:category_id,
                         brand_id:brand_id,
                         product_quantity:product_quantity,
                         product_main_image:product_main_image,
                         product_images:product_images,
                         color_id:color_id,
                         product_short_desc:product_short_desc,
                         product_long_desc:product_long_desc,
                         product_price:product_price,
                         is_active:is_active,
                         creation_date:creation_date
                        },
                      success : function(data){ 
                        alert(data);
                        setInterval('refreshPage()', 900);
                        
                        } 
                    });*/
                
        }); //end add category*/

});
function refreshPage() {
    location.reload(true);
}
    
    
    </script>
<!-- end footer -->
 </body>
</html>