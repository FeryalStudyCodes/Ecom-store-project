<?PHP
require("app/models/database.php");
require("core/db.php");

class cart{
    public  $db;
    function __construct(){
        $this->db=new DB();
    }

    function addData($data){
        $this->db->insert("cart",$data);
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

    
}