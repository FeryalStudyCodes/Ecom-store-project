              
<div class="card">
     <h5 class="card-header">brand Form</h5>
     <div class="card-body">
                  <form method='post' action='admin_brand/insert'>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">brand Name  : </label>
                            <input id="cat_name" type="text" class="form-control" name='brand_name'>
                        <div>
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" checked="" class="custom-control-input" name='is_active' value=1>
                        <span class="custom-control-label">is Active</span>
                        </label>
                        <input type='submit' value='add brand' class='btn btn-primary'>
                  </form>
      </div>
</div>
<!-- add a pages for the admin to manage the categories-->