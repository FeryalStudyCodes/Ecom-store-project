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
    function check($data)
    {

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
                 echo "login sucssfuly";
                }
                else 
                {
                    echo "sorry check your email or password";
                }
    }
            
        
        
    
    
}

?>