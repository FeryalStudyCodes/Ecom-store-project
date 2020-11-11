<?PHP
session_start(); 
include "app/views/admin/dashboard_contant/top.php"; 
include "app/views/admin/dashboard_contant/navbar.php";
include "app/views/admin/dashboard_contant/sidebar.php";
?>

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
              <a href="admin/admin_brand/edite_brand?action=edite_brand&brand_id=<?PHP echo $id?>"  class="btn btn-sm btn-info edit_brand"  data-id='<?= $id; ?>' style="color:#fff;" >
              <i class="fas fa-pencil-alt"></i></a>
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


<!-- footer -->
<?php include "app/views/admin/dashboard_contant/footer.php"; ?>
  
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

















 