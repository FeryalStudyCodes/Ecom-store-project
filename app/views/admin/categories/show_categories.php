
<p> <a href="admin/admin_cat/add_cat">add categories</a></p>
   
  
  <?php 
     $i=0;
    $rows=$data['categories'];
    foreach($rows as $row)
     {
              
    ?>

    <div >
        <div class="box" style="background-color: #E7B3AB;"> 
            <br>
            <label>category_name : <?php  echo $row->category_name ?>  </label>
            <br>
            <label>is_active : <?php if($row->is_active == 1) echo " active "; else echo " not active ";?></label>
            <br>
            <label>creation_date: <?php echo $row->creation_date ?></label>
            <br>
            <label>parent_catergory : <?php if($row->parent_catergory == 0 ) echo " Mean catergory "; else echo " not Mean ";   ?></label>
            <br>
            <label>modification_date	 : <?php $row->modification_date ?></label>
            <br>
            <a href="admin/admin_cat/edite_cat?action=edite_cat&category_id=<?PHP echo $row->category_id?>">edite category</a>
            <br>
            <a href="admin/admin_cat/delete?action=delete&category_id=<?PHP echo $row->category_id?>">delete category</a>
            <br>
        </div>
    <?php $i++; } ?>          
        </div>