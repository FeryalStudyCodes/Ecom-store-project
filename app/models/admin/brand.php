<?PHP
require("app/models/database.php");
require("core/db.php");
class brand{
   public  $db;
    function __construct(){
        $this->db=new DB();
    }
    function  getData(){
        $cols=array("*");
        $tbls=array("brand");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->build()
        ->exeucte();
    }
    function addData($data){
        $this->db->insert("brand",$data);
    }
    function  updateBrand(){
        $id= $_GET['brand_id'];
        $cols=array('*');
        $tbls=array("brand");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("brand_id","=",$id)
        ->build()
        ->exeucte();
    }
    function update($data){
        $value= $_POST['brand_id'];
        $this->db->updateBrand("brand",$data,$value);
    }
    function delet(){
        $value= $_POST['brand_id'];
        $tbls=array("brand");
        return $this->db
        ->delete()
        ->from($tbls)
        ->where("brand_id","=",$value)
        ->build()
        ->delete_execute();
        
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
                {session_start();
                    $_SESSION['Admin_id'] = $select_result[0]->user_id;
                    $_SESSION['Admin_name'] = $select_result[0]->user_name;
                   // echo $_SESSION['Admin_id']."<br>".$_SESSION['Admin_name'];
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