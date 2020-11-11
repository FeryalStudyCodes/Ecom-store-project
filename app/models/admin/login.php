<?PHP
require("app/models/database.php");
require("core/db.php");

class login{


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
    function check($data)
    {
                $cols=array("email","password","user_id","user_name");
                $tbls=array("users");
                $select_result =  $this->db
                ->select($cols)
                ->from($tbls)
                ->where("email","=",$_POST['email'])
                ->Where("password","=",$_POST['password'])
                ->build()
                ->exeucte();
               // echo "<br".$loginArray [0]->user_id."<br>";
                //[user_id] => 4
                $count = count($select_result);
                if ( $count > 0) 
                {
                    session_start();
                    $_SESSION['Admin_id'] = $select_result[0]->user_id;
                    $_SESSION['Admin_name'] = $select_result[0]->user_name;
                        header("Location: ../views/admin/index?$select_result");
                        exit();
                    }
                    else 
                    { 
                        header("Location: ../views/admin/login?message=sorry check your email or password");
                        exit();
                    }
    }
            
        
        
    
    
}

?>