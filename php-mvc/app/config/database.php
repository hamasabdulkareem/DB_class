<?PHP
class dbconnect{
    public function connect(){
        public $servername = "localhost";
        public $dbname = "yemen_store";
        public $username = "root";
        public $password = "";
        $conn = "mysql::host=$servername;dbname=$dbname";
        $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
        $conn = new PDO($conn, $username, $password, $options);
        return $conn;
    }
}
?>
