<?PHP
session_start(); 
include "app/views/admin/dashboard_contant/top.php"; 
include "app/views/admin/dashboard_contant/navbar.php";
include "app/views/admin/dashboard_contant/sidebar.php";
?>
 
<div class="row">
      	<div class="col-10 justify-content-center">
      		<h2>Edite Categories</h2>
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
                <option value="<?= $row->is_active?>"></opiton>
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
<?php include "app/views/admin/dashboard_contant/footer.php"; ?>

 </body>
</html>







