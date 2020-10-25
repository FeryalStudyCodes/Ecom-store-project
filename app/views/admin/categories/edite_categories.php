<form method='post' action='admin_cat/update'> 
<?php 
    $i=0;
    $rows=$data['categories'];
   
    foreach($rows as $row)
     {
    ?>

<div >
  <div class="box" style="background-color: #E7B3AB;"> 
       <input type='hidden' name='category_id' value=<?PHP echo $rows[$i]->category_id?> >
        <br>
        <label>إسم القسم : 
        <input type='text' name='category_name' value=<?PHP echo $rows[$i]->category_name ?>>  
        </label>
        <br>
        <label>is_active : 
        <?php if($rows[$i]->is_active == 1) {echo " yes  " ;
       }
         else {echo " No ";
         }
         ?></label>
        <label class="custom-control custom-checkbox">
         <input type="checkbox" checked="" class="custom-control-input" name='is_active' value=1><span class="custom-control-label">is Active</span>
          </label>
        <br>
        <label>creation_date: <?php echo $rows[$i]->creation_date ?></label>
        <br>
        <label>parent_catergory : <?php if($rows[$i]->parent_catergory == 0 ) echo " Mean catergory "; else echo " not Mean ";   ?></label>
        <br>
        
        <?PHP $modification_date=date("Y-m-d H:i:s"); ?>
        <input type="hidden" checked="" class="custom-control-input" name='modification_date' value= <?PHP echo $modification_date; ?>>
                                                
        <br>
        <input type='submit' value='edite category' class='btn btn-primary'>
        <br>
     
     </div>
                  <?php
                   
                    $i++;
                   
                  }
                  ?>    
              </form>      
 </div>
<!--
<div class="card">
            <h5 class="card-header">category Form</h5>
             <div class="card-body">
              <form method='post' action='admin_cat/update'>       
                <label>Category Name
                
                <?php 
                 //$rows=$data['categories'];
                 // print_r($rows); 
                                            ?>
                <input type='hiden' name='cat_id' value=<?PHP //echo $rows[0]->cat_id?> >
                <input type='text' name='cat_name' value=<?PHP //echo $rows[0]->cat_name?> >
              
                </label>          
                <label class='custom-control custom-checkbox'>
                <input type='checkbox' checked='' class='custom-control-input' name='is_active' value=1>
                <span class='custom-control-label'>is Active</span>
                </label>                                  
                <input type='submit' value='edite category' class='btn btn-primary'>
              </div>
              </form>
             </div>
            </div>
        <div class="has-form">
        <div class="card">
            <h5 class="card-header">category Form</h5>
             <div class="card-body">
              <form method='post' action='admin_cat/delete'>       
                <label>Category Name
                
                <?php 
                // $rows=$data['categories'];
                //  print_r($rows); 
                                            ?>
                <input type='hiden' name='cat_id' value=<?PHP //echo $rows[0]->cat_id?> >
                <input type='text' name='cat_name' value=<?PHP// echo $rows[0]->cat_name?> >
                </label>          
                <label class='custom-control custom-checkbox'>
                <input type='checkbox' checked='' class='custom-control-input' name='is_active' value=1>
                <span class='custom-control-label'>is Active</span>
                </label>                                  
                <input type='submit' value='delet category' class='btn btn-primary'>
              </div>
              </form>
             </div>
            </div>
        <div class="has-form">


