<?PHP
require("database.php");
require("core/db.php");

class login{


   public  $db;

    function __construct(){
        $this->db=new DB();
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