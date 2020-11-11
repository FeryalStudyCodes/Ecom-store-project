
<?PHP

require("database.php");
require("core/db.php");

class singnup{
   public  $db;
    function __construct(){
     $this->db=new DB();
    }

    function addData($data){          
                print_r($data);
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
                        header("Location: ../views/signup/index?error=The username is taken try another");
                        exit();
                }
                else  
                {
                        header("Location: ../views/signup/index?error=The email is taken try another");
                        exit();
                }
                }else {
                        $this->db->insert("users",$data);
                        header("Location: ../views/signup/index?success=successfully");
                        exit();
                }
            }
}

   /*if (isset($_POST['userName']) && isset($_POST['name'])
            && isset($_POST['password']) && isset($_POST['email'])) {
            function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }

           $userName = validate($_POST['userName']);
            $name = validate($_POST['name']);
            $password = validate($_POST['password']);
            $email = validate($_POST['email']);
            $user_data = 'userName='. $userName. '&name='. $name. '&email='. $email;


            if (empty($userName)) {
                header("Location: ../views/signup/index?error=User Name is required&$user_data");
                exit();
            }else if(empty($password)){
                header("Location: ../views/signup/index?error=Password is required&$user_data");
                exit();
            }
            else if(empty($name)){
                header("Location: ../views/signup/index?error=Name is required&$user_data");
                exit();
            }
            else if(empty($email)){
                header("Location: ../views/signup/index?error=Name is required&$user_data");
                exit();
            }
            $password = md5($_POST['password']);
            //else{*/

?>