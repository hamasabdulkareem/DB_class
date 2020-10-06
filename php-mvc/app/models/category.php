<?PHP
 include("../../core/db.php");
 include("../config/database.php");
 class category{

    public $db;

    function __construct(){
        $this->db = new DB();
    }

    function getData(){
        $cols = array("id","name","address");
        $tbls = array("users");
        echo $this->db
        ->select($cols)
        ->from($tbls)
        ->where("id","=","3")
        ->where("address","=","sanaa")
        ->build();
        ->exeucte();
    }
        /*limit*/
        function getData_limit(){
            $cols = array("id","name","address");
            $tbls = array("users");
            echo $this->db
            ->select($cols)
            ->from($tbls)
            ->limit("id","=","3","4")
            ->build();
        }
    /* order by */
    function getData_order(){
        $cols = array("id","name","address");
        $tbls = array("users");
        echo $this->db
        ->select($cols)
        ->from($tbls)
        ->order("id")
        ->build();
    }
    /* GROUP BY */
    function getData_group(){
        $cols = array("id","name","address");
        $tbls = array("users");
        echo $this->db
        ->select($cols)
        ->from($tbls)
        ->group("id")
        ->build();
    }
    /*inner join */
    function getData_inner(){
        $cols = array("p_name","p_price");
        $tbls = array("product");
        $join_tbls = "category";
        $forgin_key = "cat_id";
        echo $this->db
        ->select($cols)
        ->from($tbls)
        ->inner_join($join_tbls,"product",$forgin_key)
        ->build();
    }
    /* left join */
    function getData_left(){
        $cols = array("p_name","p_price");
        $tbls = array("product");
        $join_tbls = "category";
        $forgin_key = "cat_id";
        echo $this->db
        ->select($cols)
        ->from($tbls)
        ->left_join($join_tbls,$forgin_key)
        ->build();
    }
    /* right join */
    function getData_right(){
        $cols = array("p_name","p_price");
        $tbls = array("product");
        $join_tbls = "category";
        $forgin_key = "cat_id";
        echo $this->db
        ->select($cols)
        ->from($tbls)
        ->right_join($join_tbls,$forgin_key)
        ->build();
    }
 }

$cat = new category();
$cat->getData();
/*$cat->getData_order();
$cat->getData_inner();
$cat->getData_limit();
$cat->getData_left();
$cat->getData_right();
$cat->getData_group();*/
?>