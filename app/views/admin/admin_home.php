
<?php
session_start();  
if (!isset($_SESSION['Admin_id'])) 
{
 // echo "gggsdfghjkl;".$_SESSION['user_id'];
  header("location:login");
}

include "dashboard_contant/top.php"; 
include "dashboard_contant/navbar.php";
include "dashboard_contant/sidebar.php";

?>
<div class="container-fluid">
  <div class="row">
      <h2>Dashboard</h2>
      </div>   
  </div>
      <div>
      <?PHP $rows=$data['brand'];
            $count = count($rows);
            echo "<div class='alert alert-info '>";
            echo "Brand  ".$count;
            echo "</div>";
      ?>
      </div>
      <div>
      <?PHP
  
            $rows=$data['categories'];
            $count = count($rows);
            echo "<div class='alert alert-info '>";
            echo "Categories  ".$count;
            echo "</div>";
      ?>
      </div>
      <div>
      <?PHP $rows=$data['products'];
            $count = count($rows);
            echo "<div class='alert alert-info '>";
            echo "Products  ".$count;
            echo "</div>";
      ?>
      </div>
 
<?php include "dashboard_contant/footer.php"; ?>

