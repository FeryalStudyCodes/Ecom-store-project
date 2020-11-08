<?PHP
require("database.php");
require("core/db.php");

class category{


   public  $db;

    function __construct(){
        $this->db=new DB();
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
    function getproduct_details(){
        return  $this->db->innerJoine();
    }
    