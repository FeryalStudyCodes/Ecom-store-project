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

}

?>