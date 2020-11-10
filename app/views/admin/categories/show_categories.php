<?php //session_start(); ?>
<?php //include_once("../dashboard_contant/top.php"); ?>
<?php //include("../../../dashboard_contant/navbar.php"); ?>
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
    <link href="http://localhost/Ecom/app/assets/css/admin/dashboard.css" rel="stylesheet">
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
<!-- contant categor page-->
      <div class="row">
      	<div class="col-10">
      		<h2>Manage Category</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_category_modal" class="btn btn-primary btn-sm">Add Category</a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
              <th>#</th>
              <th>category_name</th>
              <th>is_active</th>
              <th>creation_date</th>
              <th>parent_catergory</th>
              <th>modification_date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="category_list">
          <?php 
            $i=0;
            $r=1;
            $rows=$data['categories'];
            foreach($rows as $row)
            {         
              $id = $row->category_id;
          ?>
              <tr>
                <td id='<?= $id; ?>'><?php  echo $r ?></td>
                <td><?php echo $row->category_name ?></td>
                <td><?php if($row->is_active == 1) echo " active "; else echo " not active ";?></td>
                <td><?php echo $row->creation_date ?></td>
                <td><?php if($row->parent_catergory != 0 ) echo "not Mean  "; else echo " Mean catergory  ";   ?></td>
                <td><?php if(empty($row->modification_date)) echo " not edit "; else echo $row->modification_date;?></td>
                <td><button type="button" id="<?php echo $row->category_name ?>" class='delete_category btn-sm btn btn-danger' data-id='<?= $id; ?>'><i class="fas fa-trash-alt"></i></button>
              <a href="admin/admin_cat/edite_cat?action=edite_cat&category_id=<?PHP echo $id?>"  class="btn btn-sm btn-info edit_brand"  data-id='<?= $id; ?>' style="color:#fff;" ><i class="fas fa-pencil-alt"></i></a>
              
                  </td></tr></tr> 
          <?php $i++; $r++;} ?> 
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<!-- end contant categor page-->
<!-- Add Modal -->
<div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <input type="hidden" name="cat_id">
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" id="category_name" class="form-control" placeholder="Enter Category Name">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>is Active </label>
		        		<select class="form-control category_list"  id="is_active">
                <option value=1>yes</opiton>
                <option value=0>No</option>;
		        		</select>
              </div>
            </div>
            <?PHP $creation_date=date("Y-m-d"); ?>
            <input type="hidden" checked="" class="custom-control-input" id="creation_date"  value= "<?PHP echo $creation_date; ?>">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Parent </label>
		        		<select class="form-control category_list" id="parent_catergory" >
                <option value='0'>parent</opiton>
                <?php
                    $rows=$data['categories'];
                    foreach($rows as $row)
                    {
                      echo "<option value=$row->category_id>$row->category_name</option>";
                    }
                ?>
		        		</select>
              </div>
        		</div>                                  
            <div class="col-12">
              <button type="button" class="btn btn-primary add_category ">Add Category</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End add Modal -->
<!-- footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  <script>
  
$(document).ready(function(){
      
      // Delete Category 
       $('.delete_category').click(function(){
        var el = this;
        // Delete id
        var deleteid = $(this).data('id');
        var category_name = $(this).attr("id");
        var confirmalert = confirm("Are you sure you want to delet  "+category_name+" ?");
        if (confirmalert == true) {
          // AJAX Request
          $.ajax({
            url: 'admin/admin_cat/delete',
            type: 'POST',
            data: { category_id :deleteid },
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
       // Add Category
        $('.add_category').click(function(){   
        var el = this;
              var category_name = $('#category_name').val();
                var is_active = $('#is_active').val();
                var parent_catergory = $('#parent_catergory').val();
                var creation_date = $('#creation_date').val();

                if(category_name == "" )
                {
                    $('#message').html('Please Fill in the Blanks ');
                }
                else
                {
                    $.ajax({
                      url : 'admin/admin_cat/add',
                      method : 'POST',
                      data : {
                        category_name:category_name,
                        is_active:is_active,
                        parent_catergory:parent_catergory,
                        creation_date:creation_date
                        },
                      success : function(data){ 
                        alert(data);
                        setInterval('refreshPage()', 900);
                        
                        } 
                    });
                }
        }); //end add category

});
function refreshPage() {
    location.reload(true);
}
</script>
 </body>
</html>
<!-- end footer -->
































<!--<p> <a href="admin/admin_cat/add_cat">add categories</a></p>
   
  
  <?php 
     $i=0;
    $rows=$data['categories'];
    foreach($rows as $row)
     {      
  ?>

    <div >
        <div class="box" style="background-color: #E7B3AB;"> 
            <br>
            <label> : <?php  echo $row->category_name ?>  </label>
            <br>
            <label> : <?php if($row->is_active == 1) echo " active "; else echo " not active ";?></label>
            <br>
            <label>: <?php echo $row->creation_date ?></label>
            <br>
            <label> : <?php if($row->parent_catergory == 0 ) echo " Mean catergory "; else echo " not Mean ";   ?></label>
            <br>
            <label>	 : <?php $row->modification_date ?></label>
            <br>
            <a href="admin/admin_cat/edite_cat?action=edite_cat&category_id=<?PHP echo $row->category_id?>">edite categories</a>
            <br>
            <a href="admin/admin_cat/delete_cat?action=delete_cat&category_id=<?PHP echo $row->category_id?>">delete</a>
        </div>
    <?php $i++; } ?>          
        </div>-->
<!-- footer -->

<!-- end footer -->