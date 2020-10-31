<?PHP

class DB{
    public $columns="";
    public $tables="";
    public $cond="";
    public $final_query="";
    private $connection;
    public static $row;
    function __construct(){
        try {
        $conn = dbconnect::$server.":host=".dbconnect::$host.";dbname=".dbconnect::$dbname;
        $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
      $this->connection = new PDO($conn,dbconnect::$username, dbconnect::$password, $options);
     
     // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
     
    }
    function delete(){
        $this->columns="DELETE ";
        return $this;
    }
    function select($cols){
        $this->columns="select ".implode(",",$cols)." ";
        return $this;
    }
    function from($tbls){
        $this->tables="from ".implode(",",$tbls)." ";
        return $this;
    }

    function where($cond,$oprator,$value){
        if(empty($this->cond))
        $this->cond="where ".$cond." ".$oprator." '".$value."' ";
        else
        $this->cond.=" and ".$cond." ".$oprator." '".$value."' ";
        return $this;
   }
    function orWhere($cond,$oprator,$value){
        if(empty($this->cond))
        $this->cond="where ".$cond." ".$oprator." '".$value."' ";
        else
        $this->cond.=" or ".$cond." ".$oprator." '".$value."' ";
        return $this;
    }
    function whereselect($cond,$oprator,$value){
        $this->cond="where ".$cond." ".$oprator." '".$value."' ";
        return $this;
   }
    function build(){ 
        $this->final_query=$this->columns.$this->tables.$this->cond;
        return $this;
    }

    function exeucte(){
       // echo "<br>".$this->final_query."<br>";
        $stmt=$this->connection->prepare($this->final_query);
        $stmt->execute();
       $result= $stmt->fetchAll(PDO::FETCH_OBJ);
       return $result;
    }
    function insert($tbl,$items){
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $values=array();
        foreach(array_values($items)as $item){
            $values[]="'".$item."'";
        }
       try{
        $this->final_query="insert into ".$tbl."(".implode(",",array_keys($items)).") values (".implode(",",$values).")";
        $stmt=$this->connection->prepare($this->final_query);
        $stmt->execute();
        echo " add successfully";

       }catch(Exception $ex){
           
           echo $ex->getMessage();
       }
        return $this;
    }
    function updateCategory($tbls,$items,$value){
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $values=array();
       foreach(array_values($items)as $item){
           $values[]="'".$item."'";
       }
      try{
        $this->final_query="UPDATE ".$tbls." SET category_name"." = '".$items['category_name']."', is_active"." = '".$items['is_active']."', parent_catergory"." = '".$items['parent_catergory']."', modification_date"." = '".$items['modification_date']."' WHERE category_id = ".$value;
        $stmt=$this->connection->prepare($this->final_query);
       $stmt->execute();
       echo "<br>"."successfully"."<br>";

      }catch(Exception $ex){
          
          echo $ex->getMessage();
      }
       return $this;
   }
   function updateproduct($tbls,$items,$value){
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $values=array();
    foreach(array_values($items)as $item){
        $values[]="'".$item."'";
    }
   try{
    $this->final_query="UPDATE ".$tbls." SET product_name"." = '".$items['product_name']."', product_details"." = '".$items['product_details']."', category_id "." = '".$items['category_id']."', brand_id "." = '".$items['brand_id']."', product_quantity "." = '".$items['product_quantity']."', product_main_image "." = '".$items['product_main_image']."', product_images "." = '".$items['product_images']."', color_id "." = '".$items['color_id']."', product_short_desc "." = '".$items['product_short_desc']."', product_long_desc "." = '".$items['product_long_desc']."', product_price "." = '".$items['product_price']."', is_active "." = '".$items['is_active']."' WHERE product_id = ".$value;
    $stmt=$this->connection->prepare($this->final_query);
    $stmt->execute();
    echo "successfully"."<br>";

   }catch(Exception $ex){
       
       echo $ex->getMessage();
   }
    return $this;
}
function updateBrand($tbls,$items,$value){
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $values=array();
    foreach(array_values($items)as $item){
        $values[]="'".$item."'";
    }
   try{
    $this->final_query="UPDATE ".$tbls." SET brand_name"." = '".$items['brand_name']."', is_active"." = '".$items['is_active']."' WHERE brand_id  = ".$value;
    $stmt=$this->connection->prepare($this->final_query);
    $stmt->execute();
    echo " update successfully";
   }catch(Exception $ex){
       
       echo $ex->getMessage();
   }
    return $this; 
}
   function delete_execute(){
    try{
     $stmt=$this->connection->prepare($this->final_query);
     $stmt->execute();
     $result = 1;
     echo $result;
    }catch(Exception $ex){ 
        $result = 0;
       echo $result;
    }
     
 }








}

?>