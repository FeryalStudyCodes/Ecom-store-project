<?PHP
session_start(); 
include "app/views/admin/dashboard_contant/top.php"; 
include "app/views/admin/dashboard_contant/navbar.php";
include "app/views/admin/dashboard_contant/sidebar.php";
?>
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
<?php include "app/views/admin/dashboard_contant/footer.php"; ?>
 
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