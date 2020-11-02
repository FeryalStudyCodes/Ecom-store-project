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
   
    function check($data){
        $cols=array("email","password");
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
            header("Location: ../views/login?success=login sucssfuly");
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
                header("Location: ../views/main/singnup?success=successfully");
                exit();
        }
    }
        
    
    
}

?>