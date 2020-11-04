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
    <link href="http://localhost:81/Ecom-store-project/app/assets/css/admin/dashboard.css" rel="stylesheet">
  </head>
 <body>
 <!-- end Top -->
 <!-- Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">login Store</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link" href="../admin/admin-logout.php">Sign out</a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../admin/register.php">Register</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin/login.php">Login</a>
	    			<?php
    			}	
    		}
    	?>
      
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
           
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == '') ? 'active' : ''; ?>" href="http://localhost:81/Ecom-store-project/admin/admin_product/index">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'brands.php') ? 'active' : ''; ?>" href="http://localhost:81/Ecom-store-project/admin/admin_brand/index">
              <span data-feather="shopping-cart"></span>
              Brands
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="http://localhost:81/Ecom-store-project/admin/admin_cat/show">
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
      		<h2>Manage Brand</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_brand_modal" class="btn btn-primary btn-sm">Add Brand</a>
      	</div>
      </div>
      <div class="table-responsive table">
        <table class="table table-striped table-sm" id="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Active</th>
              <th>Action</th>
            </tr>
          </thead>       
          <tbody id="brand_list">
          <?php
            $rows=$data['brand'];
            $i=0;
            $r=1;
            foreach($rows as $row)
              {       
                $id = $row->brand_id;
          ?>
             <tr>
              
              <td id='<?= $id; ?>'><?php  echo $r ?></td>
              <td><?php  echo $row->brand_name ?></td>
              <td><?php if($row->is_active == 1) echo " yes "; else echo " No ";?></td>
              <td><button type="button" id="<?php  echo $row->brand_name ?>" class='delete btn-sm btn btn-danger' data-id='<?= $id; ?>'><i class="fas fa-trash-alt"></i></button>
              <a href="admin/admin_brand/edite_brand?action=edite_brand&brand_id=<?PHP echo $id?>"  class="btn btn-sm btn-info edit_brand"  data-id='<?= $id; ?>' style="color:#fff;" ><i class="fas fa-pencil-alt"></i></a>
                  </td></tr> 
            <?php $i++; $r++; } ?> 
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<!-- add Modal -->
<div class="modal fade" id="add_brand_modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p id="message" class="text-dark"></p>
      <p id="msg"></p>
        <form id="add-brand-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Brand Name</label>
		        		<input type="text" name="brand_name" class="form-control" placeholder="Enter Brand Name" id="brand_name">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>is Active </label>
		        		<select class="form-control category_list" name="parent_catergory" id="is_active">
                <option value=1>yes</opiton>
                <option value=0>No</option>;
		        		</select>
              </div>
            </div>
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add_brand">Add brand</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- add Modal -->


<!-- footer<script src="../../app/assets/js/admin/dashboard.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script 
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script ></script>
  
  
  <script>
$(document).ready(function(){
// Delete brand 
$('.delete').click(function(){
  var el = this;
  
  var deleteid = $(this).data('id');
  var brand_name = $(this).attr("id");
  var confirmalert = confirm("Are you sure you want to delet  "+brand_name+" ?");
  if (confirmalert == true) {
     // AJAX Request
     $.ajax({
       url: 'admin/admin_brand/delet',
       type: 'POST',
       data: { brand_id:deleteid },
       success: function(data){
         if(data == 1){
          alert("deleted successfuly");
          $(el).closest('tr').fadeOut(800,function(){
	       $(this).remove();
                    });
         }
         else{
          alert("sorry you can deleted");
         }
       }
     });
  }
});

$('.add_brand').click(function(){
 // alert("hi");
 var el = this;
  var brand_name = $('#brand_name').val();
        var is_active = $('#is_active').val();

        if(brand_name == "" )
        {
            $('#message').html('Please Fill in the Blanks ');
        }
        else
        {
            $.ajax({
              url : 'admin/admin_brand/insert',
              method : 'POST',
              data : {brand_name:brand_name,is_active:is_active},
              success : function(data){ 
                alert(data);
                setInterval('refreshPage()', 900);
                
                } 
            });
        }
}); //end add brand
});
function refreshPage() {
    location.reload(true);
}
</script>
 </body>
</html>
<!-- end footer -->

















 