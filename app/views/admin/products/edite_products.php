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
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="http://localhost:/Ecom/app/assets/css/admin/dashboard.css" rel="stylesheet">
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
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 
            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>

          <li class="nav-item">
           
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == '') ? 'active' : ''; ?>" href="http://localhost:/Ecom-store-project/admin/admin_product/index">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'brands.php') ? 'active' : ''; ?>" href="http://localhost:/Ecom-store-project/admin/admin_brand/index">
              <span data-feather="shopping-cart"></span>
              Brands
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="http://localhost:/Ecom-store-project/admin/admin_cat/show">
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
      	<div class="col-10 justify-content-center">
      		<h2>Edite Brand</h2>
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
             // echo "<br><br>";
             // print_r($rows);
              foreach($rows as $row)
              {
                
        ?>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
              <input type='hidden' name='product_id' value=<?PHP echo $row->product_id?> >
                <label>Product Name</label>
                <input type="text" class="form-control" name='product_name' value=<?PHP echo $row->product_name ?>>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Details</label>
                <input type="text" class="form-control" name='product_details' value=<?PHP echo $row->product_details ?>>
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
                <input type="number" name='product_quantity' value=<?PHP echo $row->product_quantity ?> class="form-control" >
              </div>
            </div>
            <?php
            $imageURl = 'http://localhost:/Ecom-store-project/app/assets/images/'.$row->product_main_image;
            ?>
           <div class="col-12">
              <div class="form-group">
                <label>Product Main Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file"accept="image/*" name="product_main_image" class="form-control" value="<?PHP echo $row->product_main_image ?>">
                <img src='<?php  echo $imageURl;?>'  class="img-fluid" width="50">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" accept="image/*" multiple class="form-control-file" name='product_images[]' value="<?PHP echo $row->product_images ?>" >
                <br>
                <?php
                $imges = $row->product_images;
                $clean_url=rtrim($imges,',');
                $clean_url=explode(',',$clean_url);
                foreach($clean_url as $part){
                    $product_images='http://localhost:/Ecom-store-project/app/assets/images/'.$part;
                    echo "<img class='img-fluid' width='50' src=' $product_images 'alt='Vans'> ";
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
                <input type="text" class="form-control" name='product_short_desc' value=<?PHP echo $row->product_short_desc ?>>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product short desc</label>
                <input type="text" class="form-control" name='product_short_desc' value=<?PHP echo $row->product_short_desc ?>>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product long desc</label>
                <input type="text" class="form-control" name='product_long_desc' value=<?PHP echo $row->product_long_desc ?>>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Price</label>
                <input type="text" class="form-control" name='product_price' value=<?PHP echo $row->product_price ?>>
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
		        		<select class="form-control category_list" name="is_active">
                <option value=1>yes</opiton>
                <option value=0>No</option>;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  
 </body>
</html>