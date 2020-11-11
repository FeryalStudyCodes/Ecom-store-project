<?PHP
require("database.php");
require("core/db.php");

class main{


   public  $db;

    function __construct(){
        $this->db=new DB();
    }
    function getproducts(){
        $cols=array('*');
        $tbls=array("product");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->build()
        ->exeucte();
    }

    function  orderby(){
        return  $this->db->orderby();
        
    }

    function  getCategory(){
        $cols=array('*');
        $tbls=array("category");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->whereselect("is_active","=","1")
        ->build()
        ->exeucte();
    }
    function getBrand(){
        $cols=array("*");
        $tbls=array("brand");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->whereselect("is_active","=","1")
        ->build()
        ->exeucte();
    }
    function getColor(){
        $cols=array("*");
        $tbls=array("color");
        return $this->db
        ->select($cols)
        ->from($tbls)
        ->build()
        ->exeucte();
    }
    function Category(){
        return $this->db->getcategories();

    }
   
    function check($data){
        $cols=array("email","password","user_id","user_name");
        $tbls=array("users");
        $select_result =  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("email","=",$_POST['email'])
        ->Where("password","=",$_POST['password'])
        ->build()
        ->exeucte();
        $count = count($select_result);
        if ( $count > 0) 
        {
            session_start();
            $_SESSION['user_id'] = $select_result[0]->user_id;
            $_SESSION['user_name'] = $select_result[0]->user_name;
            header("Location: ../views/main");
            exit();
        }
        else 
        { 
            header("Location: ../views/login?error=sorry check your email or password");
            exit();
        }
    }
    function addusers($data){          
      
        $userName = $_POST['user_name'];
        $email = $_POST['email'];
        $cols=array("user_name","email");
        $tbls=array("users");
        $select_result =  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("user_name","=",$userName)
        ->orWhere("email","=",$email)
        ->build()
        ->exeucte();
        $count = count($select_result);
        if ( $count > 0) {
        if (!empty($select_result[0]->user_name) && $select_result[0]->user_name == $userName)
        {
                header("Location: ../views/main/singnup?error=The username is taken try another");
                exit();
        }
        else  
        {
                header("Location: ../views/main/singnup?error=The email is taken try another");
                exit();
        }
        }else {
                $this->db->insert("users",$data);
                header("Location: ../views/login");
                exit();
        }
    }
        
    function getproduct_details(){
        return  $this->db->innerJoine();
    }
      
    function addtocart(){
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
        $quantity=$quantity<=0 ? 1 : $quantity;
        $cart_item=array(
            'quantity'=>$quantity
        );
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }
       if(array_key_exists($id, $_SESSION['cart'])){
            header('Location:main?action=exists&id=' . $id);
        }
        else{
            $_SESSION['cart'][$id]=$cart_item;
            header('Location:main?action=added');
        }
    }
    function showcartitem(){
        session_start();
        if(count($_SESSION['cart'])>0){
            $ids = array();
            foreach($_SESSION['cart'] as $id=>$value){
                array_push($ids, $id);           
            }
            $stmt = $this->db->readByIds($ids);
           return $stmt;
           
        }
        else
        {
            $stmt = "empty";
            return $stmt;  
        }
    }
    function updatecartitem() {
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
        $quantity=$quantity<=0 ? 1 : $quantity;
        unset($_SESSION['cart'][$id]);
        $_SESSION['cart'][$id]=array(
            'quantity'=>$quantity
        );
        header('Location:displayShopingCartItems?action=quantity_updated&id=' . $id);
    }
     function removecartitem(){
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $name = isset($_GET['name']) ? $_GET['name'] : "";
        unset($_SESSION['cart'][$id]);
        header('Location:displayShopingCartItems?action=removed&id=' . $id);
    }

     function addtowishlist(){ 
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        if(!isset($_SESSION['wish'])){
            $_SESSION['wish'] = array();
        }
        if(array_key_exists($id, $_SESSION['wish'])){
            header('Location:main?action=wishexists&id=' . $id);
        }
        else{
            $_SESSION['wish'][$id]=$cart_item;
            header('Location:main?action=wishadded');
        }
  }
  function showWishlistitem(){
        session_start();
        if(count($_SESSION['wish'])>0){
            $ids = array();
            foreach($_SESSION['wish'] as $id=>$value){
                array_push($ids, $id);
            }
            $stmt = $this->db->readByIds($ids);
            return $stmt;
        }
        else
        {
            $stmt = "empty";
            return $stmt;   
        }
  }
  function removeWishlistitem(){
       session_start();
       $id = isset($_GET['id']) ? $_GET['id'] : "";
       unset($_SESSION['wish'][$id]);
       header('Location:displayWishListItems?action=removed&id=' . $id);
  }
  function addtocartfromwishlist(){
      session_start();
      $id = isset($_GET['id']) ? $_GET['id'] : "";
      if(!isset($_SESSION['wish'])){
          $_SESSION['wish'] = array();
      }
         if(array_key_exists($id, $_SESSION['wish'])){
          header('Location:displayWishListItems?action=exists&id=' . $id);
      }
      else{
          $_SESSION['wish'][$id]=$cart_item;
          header('Location:displayWishListItems?action=added');
      }
  }
 function getcatbyid(){
    $id= $_GET['category_id'];
    $cols=array('*');
    $tbls=array("product");
    return $this->db
    ->select($cols)
    ->from($tbls)
    ->whereselect("category_id","=",$id)
    ->build()
    ->exeucte();
    
    $i=0;
    $rows=$result;
   // print_r($rows);
    foreach($rows as $row)
    {   
        $id = $row->product_id;
        $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;  
        echo "
        <div class='col-md-4'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$row->product_name</div>
                        <div class='panel-body'>
                        <img  width='60' height='60'  src=' $imageURl'>
                        </div>
                        <div class='panel-heading'>$.$row->product_price
                            
                            <a href='main/product_details?action=product_details&product_id $id'class='btn btn-danger btn-xs' data-tip='Quick View'><i class='fa fa-eye'></i></a>
                           <a href='main/wishlist?id=$id' data-tip='Add to Wishlist' class='btn btn-danger btn-xs'><i class='fa fa-heart'></i></a></li>
                            <a href='main/shopingCart?id=$id' data-tip='Add to Cart' class='btn btn-danger btn-xs' class='cart'  data-id='$id' ><i class='fa fa-shopping-cart'></i></a>
                        </ul>
                        </div>
                    </div>
                </div>	
    ";
   $i++; }
 }
        
}

function addtowishlistfromcategory (){
    session_start();
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    if(!isset($_SESSION['wish'])){
        $_SESSION['wish'] = array();
    }
       if(array_key_exists($id, $_SESSION['wish'])){
        header('Location:getcat?action=exists&id=' . $id);
    }
    else{
        $_SESSION['wish'][$id]=$cart_item;
        header('Location:getcat?action=added');
    }
}

function  addtocartfromcategory (){
    session_start();
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
    $quantity=$quantity<=0 ? 1 : $quantity;
    $cart_item=array(
        'quantity'=>$quantity
    );
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
   if(array_key_exists($id, $_SESSION['cart'])){
        header('Location:getcat?action=exists&id=' . $id);
    }
    else{
        $_SESSION['cart'][$id]=$cart_item;
        header('Location:getcat?action=added');
    }
}

?>