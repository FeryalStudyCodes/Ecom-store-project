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
        $value= $_GET['category_id'];
        $tbls=array("category");
        return  $this->db
        ->delete()
        ->from($tbls)
        ->where("category_id","=",$value)
        ->build()
        ->delete_execute();
    }
}

?>