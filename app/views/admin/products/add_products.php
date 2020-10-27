              
<div class="card">
     <h5 class="card-header">product Form</h5>
     <div class="card-body">
                  <form method='post' action='admin_product/add' enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product Name : </label>
                            <input id="cat_name" type="text" class="form-control" name='product_name'>
                        </div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product details  : </label>
                            <input id="cat_name" type="text" class="form-control" name='product_details'>
                        </div>
                        <div class="form-group">
                                    <label for="input-select">Category</label>
                                    <select class="form-control" id="input-select" name='category_id'>
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
                                    <select class="form-control" id="input-select" name='brand_id'>
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
                            <label for="cat_name" class="col-form-label">product_quantity : </label>
                            <input id="cat_name" type="text" class="form-control" name='product_quantity'>
                        <div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">main image</label>
                            <input type="file" accept="image/*" class="form-control-file" name='product_main_image'> 
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">images</label>
                            <input type="file" accept="image/*" multiple class="form-control-file" name='product_images[]'>
                        </div>
                        <div class="form-group">
                                    <label for="input-select">color</label>
                                    <select class="form-control" id="input-select" name='color_id'>
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
                            <input id="cat_name" type="text" class="form-control" name='product_short_desc'>
                        <div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product_long_desc : </label>
                            <input id="cat_name" type="text" class="form-control" name='product_long_desc'>
                        <div>
                        <div class="form-group">
                            <label for="cat_name" class="col-form-label">product_price : </label>
                            <input id="cat_name" type="text" class="form-control" name='product_price'>
                        <div>
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" checked="" class="custom-control-input" name='is_active' value=1>
                        <span class="custom-control-label">is Active</span>
                        </label>                     
                        <?PHP $creation_date=date("Y-m-d H:i:s"); ?>
                        <input type="hidden" checked="" class="custom-control-input" name='creation_date' value= <?PHP echo $creation_date; ?>>    							
                        <input type='submit' value='add product' class='btn btn-primary'>
                  </form>
      </div>
</div>