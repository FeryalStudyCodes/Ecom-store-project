
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
       $result = 0;
    echo $result;
    }
    else{
        $_SESSION['cart'][$id]=$cart_item;
        $cart_count=count($_SESSION['cart']);
        echo $cart_count;
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
            //print_r($stmt);
           return $stmt;
           
        }
        else
        {
            $stmt = "empty";
            return $stmt;  
        }
    }
    // function updatecartitem() {
    //     session_start();
    //     $id = isset($_GET['id']) ? $_GET['id'] : 1;
    //     $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
    //     $quantity=$quantity<=0 ? 1 : $quantity;
    //     unset($_SESSION['cart'][$id]);
    //     $_SESSION['cart'][$id]=array(
    //         'quantity'=>$quantity
    //     );
    // }
    function updatecartitem() {
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
        $quantity=$quantity<=0 ? 1 : $quantity;
        unset($_SESSION['cart'][$id]);
        $_SESSION['cart'][$id]=array(
            'quantity'=>$quantity
        );
        header('Location:displayShopingCartItems');  
    }
    function removecartitem(){
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $name = isset($_GET['name']) ? $_GET['name'] : "";
        unset($_SESSION['cart'][$id]);
        $cart_count=count($_SESSION['cart']);
        echo $cart_count;
      }

      function addtowishlist(){ 
        session_start();
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $cart_item = "";
        if(!isset($_SESSION['wish'])){
            $_SESSION['wish'] = array();
        }
        if(array_key_exists($id, $_SESSION['wish'])){
            $result = 0;
            echo $result;
        }
        else{
            $_SESSION['wish'][$id]=$cart_item;
            $wish_count=count($_SESSION['wish']);
            echo $wish_count;
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
    $wish_count=count($_SESSION['wish']);
    echo $wish_count;
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
  function addtocartfromcategory(){ 
    session_start();
    $category_id = $_GET['category_id'];
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
        header('Location: getcat?action=exists');
    }
    else{
        $_SESSION['cart'][$id]=$cart_item;
        header('Location:getcat?action=added');
    }
}
function addtowishlistfromcategory(){
    session_start();
    $category_id = $_GET['category_id'];
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    if(!isset($_SESSION['wish'])){
        $_SESSION['wish'] = array();
    }
       if(array_key_exists($id, $_SESSION['wish'])){
        header('Location:getcat?action=exists');
    }
    else{
        $_SESSION['wish'][$id]=$cart_item;
        header('Location:getcat?action=added');
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
 }

 function checklogincheckout(){
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
        header("Location: ../views/displayShopingCartItems?user_id".$_SESSION['user_id']);
        exit();
    }
    else 
    { 
        header("Location: ../views/logincheckout?error=sorry check your email or password");
        exit();
    }
  }
  function addusercheckout($data){
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
            header("Location: ../views/main/registercheckout?error=The username is taken try another");
            exit();
    }
    else  
    {
            header("Location: ../views/main/registercheckout?error=The email is taken try another");
            exit();
    }
    }else {
            $this->db->insert("users",$data);
            header("Location: ../views/logincheckout");
            exit();
    }
  }
  function checkout(){
  
    $_SESSION['user_id'];
   $order_data = array(
    'user_id' => $_SESSION['user_id'], 
    'order_cost' => $_POST['cost'],
    'order_date' => $_POST['order_date'],
   );
   $data_details = array( 
        'product_id' => $_POST['product'], 
        'quantity' => $_POST['q'], 
    );
    $this->db->insertorder($order_data,$data_details);
   
    }

    
  
  
}
?>