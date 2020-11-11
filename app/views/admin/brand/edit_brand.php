<?PHP
session_start(); 
include "app/views/admin/dashboard_contant/top.php"; 
include "app/views/admin/dashboard_contant/navbar.php";
include "app/views/admin/dashboard_contant/sidebar.php";
?>
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
    $rows=$data['brand'];
    foreach($rows as $row)
     {
    ?>
        <form method='post' action='admin_brand/update'>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
              <input type='hidden' name='brand_id' value=<?PHP echo $row->brand_id?> >
                <label>Brand Name</label>
                <input type="text" name="brand_name" class="form-control"  value="<?PHP echo $row->brand_name; ?>">
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
                <option value="<?= $row->is_active?>"></opiton>
                <option value=1>yes</opiton>
                <option value=0>No</option>;
		        		</select>
              </div>
            </div>
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
<?php include "app/views/admin/dashboard_contant/footer.php"; ?>

 </body>
</html>