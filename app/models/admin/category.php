<?PHP
require("app/models/database.php");
require("core/db.php");

class category{
   public  $db;
    function __construct(){
        $this->db=new DB();
    }
    function  getparentCatergory(){
        $cols=array('*');
        $tbls=array("category");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("is_active","=","1")
        ->where('parent_catergory','=','0')
        ->build()
        ->exeucte();
    }
    function  getData(){
        $cols=array('*');
        $tbls=array("category");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->build()
        ->exeucte();
    }
    function  updateCategory(){
        $id= $_GET['category_id'];
        $cols=array('*');
        $tbls=array("category");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->where("category_id","=",$id)
        ->build()
        ->exeucte();
    }
    function addData($data){
        $this->db->insert("category",$data);
    }
    function update($data){
        $value= $_POST['category_id'];
        $this->db->updateCategory("category",$data,$value);
     
    }
    function delete($data){
        $value= $_POST['category_id'];
        $tbls=array("category");
        return  $this->db
        ->delete()
        ->from($tbls)
        ->where("category_id","=",$value)
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