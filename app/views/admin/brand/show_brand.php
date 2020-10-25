
<p> <a href="admin/admin_brand/add">add Brand</a></p>
   <?php 
     $rows=$data['brand'];
     $i=0;
     foreach($rows as $row)
      {
     ?>
 
     <div >
         <div class="box" style="background-color: #E7B3AB;"> 
             <br>
             <label>category_name : <?php  echo $row->brand_name ?>  </label>
             <br>
             <label>is_active : <?php if($row->is_active == 1) echo " active "; else echo " not active ";?></label>
             <br>
           
 
         </div>
     <?php $i++; } ?>          
         </div>