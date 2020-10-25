<?PHP 
require('app/views/admin/header.php');
?>

 <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2> category </h2>   
                    </div>
                 </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-8">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Add category 
                        </div>
                        <div class="card-body">
                            <form method='post' action='admin_cat/add'>
                                <div class="form-group">
                                    <label for="cat_name" class="col-form-label">Category Name : </label>
                                        <input id="cat_name" type="text" class="form-control" name='category_name'>
                                            </div>
                                                <label class="custom-control custom-checkbox">
                                                <input type="checkbox" checked="" class="custom-control-input" name='is_active' value=1><span class="custom-control-label">is Active</span>
                                                </label>
                                                <?PHP $creation_date=date("Y-m-d H:i:s"); ?>
                                                <input type="hidden" checked="" class="custom-control-input" name='creation_date' value= <?PHP echo $creation_date; ?>>
                                                <div class="form-group">
                                                    <label for="input-select">parent</label>
                                                    <select class="form-control" id="input-select" name='parent_catergory'>
                                                    <option value=0>parent</opiton>
                                                    <?php
                                                    // print_r($items);
                                                    $rows=$data['categories'];
                                                    foreach($rows as $row)
                                                    {
                                                            echo "
                                                            <option value=$row->category_id>$row->category_name</option>
                                                                ";
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            <div>
                                                    <input type='submit' value='add category' class='btn btn-primary'>
                                </div>
                            </form>
                            </div>
                 </div>
                </div>
               </div>
            </div>  
        </div>
<?PHP 
require('app/views/admin/footer.php');
?>                               

