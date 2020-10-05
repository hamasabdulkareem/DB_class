<?PHP
//include("../app/config/database.php");
class DB{
   
   /* function create_db($db_name){
        include("app/DataBase/".$db_name.".php");
    }*/
    public $colums="";
    public $tables="";
    public $cond="";
    public $final_query="";
    private $db_conn;

    /*function __construct($server,$dbname,$username,$password){
        $conn = "mysql::host=$server;dbname=$dbname";
        $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
        $this->$db_conn = new PDO($conn, $username, $password, $options);
    }*/
   
    function select($cols){
        $this->colums="select ".implode(",",$cols)." ";
        return $this;
    }
    function from($tbls){
        $this->tables="from ".implode(",",$tbls)." ";
        return $this;
    }
    function where($cond,$oprator,$value){
        if(empty($this->cond))
        $this->cond="where ".$cond." ".$oprator." ".$value." ";
        else
        $this->cond.=" or ".$cond." ".$oprator." ".$value." ";
        return $this;
    } 
    function limit($cond,$oprator,$value,$limit){
        $this->cond="where ".$cond." ".$oprator." ".$value." LIMIT ".$limit;
        return $this;
    } 
    function left_join($join_tbls,$forgin_key){
        $this->cond="left join ".$join_tbls." "."using "."(".$forgin_key.")";
        return $this;       
    }
    function right_join($join_tbls,$forgin_key){
        $this->cond="left join ".$join_tbls." "."using "."(".$forgin_key.")";
        return $this;       
    }
    function group($cond){
        $this->cond="GROUP BY ".$cond;
        return $this;
    }
    function order($cond){
        $this->cond="ORDER BY ".$cond;
        return $this;
    }
   
    function inner_join($join_tbls,$tbls,$forgin_key){
        $this->cond="join ".$join_tbls." "."on ".$tbls.".".$forgin_key." = ".$join_tbls.".".$forgin_key;
        return $this;
    }
    function build(){
        $this->final_query = $this->colums.$this->tables.$this->cond."<br>";
        return $this->final_query;
       // return $this->colums.$this->tables.$this->cond;
    }
    function exeucte(){
       // return $this->db_conn->query($this->final_query);
   }
   function insert($tbls,$data){
   // $sql = "INSERT INTO ".$tbls."(".implode(",",array_key($data)).") VALUES (".implode(",",array_values($data));
   // $conn->exec($sql);
   // return $this;
   }

}


?>