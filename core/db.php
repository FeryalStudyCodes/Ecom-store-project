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
      //print_r($conn);
      echo "Connected successfully<br>";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
     
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
        $this->cond.=" and ".$cond." ".$oprator." ".$value." ";
        return $this;
   }
    function orWhere($cond,$oprator,$value){
        if(empty($this->cond))
        $this->cond="where ".$cond." ".$oprator." '".$value."' ";
        else
        $this->cond.=" or ".$cond." ".$oprator." '".$value."' ";
        return $this;
    }
    function build(){ 
        $this->final_query=$this->columns.$this->tables.$this->cond;
        return $this;
    }

    function exeucte(){
        echo "<br>".$this->final_query."<br>";
        $stmt=$this->connection->prepare($this->final_query);
        $stmt->execute();
       $result= $stmt->fetchAll(PDO::FETCH_OBJ);
       $row=$stmt->rowCount();
       echo $row."<br>";
       print_r($result);
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
        echo "<br>".$this->final_query."<br>"."successfully"."<br>";

       }catch(Exception $ex){
           
           echo $ex->getMessage();
       }
        return $this;

    }









}

?>