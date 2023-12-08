<?php
require_once dirname(dirname(__DIR__))."/config/config-database.php";
class Connection {
    private $hostname = HOSTNAME;
    private $username = USERNAME;
    private $password = PASSWORD;
    private $db_name  = DATABASE;
    private $db_type  = DATABASE_TYPE;
    public static $pdo;
    public static $statusConnection = false;

    public function __construct($statusConnection = false){
        if($statusConnection === true):
            $this->openConnection();
        else:
            echo "No Connection.";
            exit;
        endif;
        
       
    }
    public function openConnection(){
        self::$statusConnection = 1;
        try {
            self::$pdo = new PDO("mysql:host=$this->hostname;dbname=$this->db_name;",$this->username,$this->password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "connection successfully.";
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
      

    }
    public function closeConnection(){
        self::$statusConnection = 0;
        self::$pdo = null;
    }
}

$st = new Connection(true);