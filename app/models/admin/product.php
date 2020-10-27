<?PHP
require("app/models/database.php");
require("core/db.php");
class product{
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
    
    function addData($data){
        $this->db->insert("product",$data);
    }
    function  updateproduct(){
        $id= $_GET['product_id'];
        $cols=array('*');
        $tbls=array("product");
        return  $this->db
        ->select($cols)
        ->from($tbls)
        ->whereselect("product_id","=",$id)
        ->build()
        ->exeucte();
    }
    function update($data){
        $value= $_POST['product_id'];
        $this->db->updateproduct("product",$data,$value);
    }
   
    function delete(){
        $value= $_POST['product_id'];
        $tbls=array("product");
        return  $this->db
        ->delete()
        ->from($tbls)
        ->where("product_id","=",$value)
        ->build()
        ->delete_execute();
    }
}

?>