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
      	<div class="col-10 justify-content-center">
      		<h2>Edite Brand</h2>
      	</div>
<!-- Edit brand Modal -->
<div  class="col-10 justify-content-center">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eidet Brand</h5>
      </div>
      <div class="modal-body">
      <?php 
        $i=0;
        $rows=$data['categories'];
        foreach($rows as $row)
         {
    ?>
        <form method='post' action='admin_cat/update'>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input type='hidden' name='category_id' value='<?PHP echo $rows[$i]->category_id?>' >
                <label> Category Name : 
                <input type='text' name='category_name' value='<?PHP echo $rows[$i]->category_name?>'>  
                </label>
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
            <div class="col-12">
              <div class="form-group">
              <label>parent_catergory : <?php if($row->parent_catergory != 0 ) echo "not Mean  "; else echo " Mean catergory  ";   ?></label>
             </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Parent </label>
		        		<select class="form-control category_list" name="parent_catergory" >
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
            <?PHP $modification_date=date("Y-m-d"); ?>
            <input type="hidden" checked="" class="custom-control-input" name='modification_date' value= <?PHP echo $modification_date; ?>>    							
            <div class="col-12">
              <button type='submit' class="btn btn-primary edit-brand-btn">Update Brand</button>
            </div>
          </div>
          <?php $i++; }?> 
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- end Edit brand Modal -->
<!-- footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
  
 </body>
</html>







