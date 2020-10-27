<form method='post' action='admin_product/delete' enctype="multipart/form-data"> 
<?php 
    $i=0;
    $rows=$data['products'];
    echo "<br><br>";
    print_r($rows);
    foreach($rows as $row)
     {
      echo "<br> gghjuygbb<br>".$row->product_quantity
    ?>

<div >	
  <div class="box" style="background-color: #E7B3AB;"> 
       <input type='hidden' name='product_id' value=<?PHP echo $row->product_id?> >
        <br>
        <label>product_details
        <input type='text' name='product_name' value=<?PHP echo $row->product_name ?>>  
        </label>
        <br>
        <label>product_details
        <input type='text' name='product_details' value=<?PHP echo $row->product_details ?>>  
        </label>
        <br>
        <div class="form-group">
             <label for="input-select">Category</label>
             <select class="form-control" id="input-select" name='category_id'>
             <?php
                  $categoryrows=$data['categories'];
                  foreach($categoryrows as $categoryrow)
                  {
                    echo "<option value=$categoryrow->category_id>$categoryrow->category_name</option>";
                  }
              ?>
              </select>
          </div>
          <div class="form-group">
                <label for="input-select">Brand</label>
                <select class="form-control" id="input-select" name='brand_id'>
                <?php
                     $Brandrows=$data['brand'];
                     foreach($Brandrows as $Brandrow)
                      {
                        echo "<option value=$Brandrow->brand_id >$Brandrow->brand_name</option>";
                      }
                ?>
                </select>
          </div>
          <br>
        <label>product_quantity
        <input type='text' name='product_quantity' value=<?PHP echo $row->product_quantity ?>>  
        </label>
        <br>
        <?php
            $imageURl = '../../app/assets/images/'.$row->product_main_image;
        ?>
        <label>product_main_image : <img class='card-img' src='<?php  echo $imageURl;?> 'alt='Vans'> </label>
        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">main image</label>
            <input type="file" accept="image/*" class="form-control-file" name='product_main_image'> 
        </div>
        <label>product_images :
            <?php
            $imges = $row->product_images;
            $clean_url=rtrim($imges,',');
            $clean_url=explode(',',$clean_url);
            foreach($clean_url as $part){
                $product_images='../../app/assets/images/'.$part;
                echo "<img class='card-img' src=' $product_images 'alt='Vans'> ";
            }
            echo"<br> ";
             ?>
            <br>
            <br>
        </label>
        <div class="form-group">
            <label for="exampleFormControlFile1">images</label>
            <input type="file" accept="image/*" multiple class="form-control-file" name='product_images[]'>
         </div>
           <br>
            <br>
         <div class="form-group">
              <label for="input-select">color </label>
              <select class="form-control" id="input-select" name='color_id'>
              <?php
                  $colorrows=$data['color'];
                   foreach($colorrows as $colorrow){echo "<option value=$colorrow->color_id >$colorrow->color_name</option>"; }
              ?>
              </select>
         </div>
        <br>
        <br>
        <label>product_short_desc
        <input type='text' name='product_short_desc' value=<?PHP echo $row->product_short_desc ?>>  
        </label>
        <br>
        <label>product_long_desc
        <input type='text' name='product_long_desc' value=<?PHP echo $row->product_long_desc ?>>  
        </label>
        <br>
        <label>product_price
        <input type='text' name='product_price' value=<?PHP echo $row->product_price ?>>  
        </label>
        <label>is_active : <?php if($row->is_active == 1) {echo " yes  " ;}else {echo " No ";}
         ?></label>
        <label class="custom-control custom-checkbox">
         <input type="checkbox" checked="" class="custom-control-input" name='is_active' value=1><span class="custom-control-label">is Active</span>
          </label>
        <br>
        <br>  <br>                                    
        <br>
        <input type='submit' value='delete product' class='btn btn-primary'>
        <br>
     
     </div>
                  <?php
                   
                    $i++;
                   
                  }
                  ?>    
              </form>      
 