<p> <a href="admin/admin_product/add_pro">add product</a></p>
<p> <a href="admin/admin_product/delete_product">delet product</a></p>
<p> <a href="admin/admin_product/edite_pro">edite product</a></p>

<p> <a href="admin/admin_cat/add_cat">add categories</a></p>
   
  
  <?php 
     $i=0;
    $rows=$data['products'];
    foreach($rows as $row)
     {      
    ?>
    <div >
    
        <div class="box" style="background-color: #E7B3AB;"> 
            <br>
            <label>product_name : <?php  echo $row->product_name ?>  </label>
            <br>
            <br>
            <label>product_details : <?php  echo $row->product_details ?>  </label>
            <br>
            <br>
            <label>product_quantity : <?php  echo $row->product_quantity ?>  </label>
            <br>
            <br>
            <?php
            $imageURl = '../../app/assets/images/'.$row->product_main_image;
             ?>
            <label>product_main_image : <img class='card-img' src='<?php  echo $imageURl;?> 'alt='Vans'> </label>
            <br>
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
            <label>product_short_desc : <?php  echo $row->product_short_desc ?>  
            <br>
            <br>
            <label>product_long_desc : <?php  echo $row->product_long_desc ?>  </label>
            <br>
            <br>
            <br>
            <label>is_active : <?php if($row->is_active == 1) echo " active "; else echo " not active ";?>  </label>
            <br>
            <br>
            <br>
            <label>creation_date : <?php  echo $row->creation_date ?>  </label>
            <br>

            <br>
            <a href="admin/admin_product/edite_product?action=edite_product&product_id=<?PHP echo $row->product_id?>">edite product</a>
            <br>
            <a href="admin/admin_product/delete_product?action=delete_product&product_id=<?PHP echo $row->product_id?>">delete</a>
       

    </div>
    <?php $i++; } ?>          
        </div>