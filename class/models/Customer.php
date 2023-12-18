<?php
class Customer {
    public $pdo;
    public int $id;
    public string $username , $password , $first_name , $last_name , $phone_number , $email , $per_status;
    public $stmt_insert = "INSERT INTO `authen_admin`(`authen_username`, `authen_password`, `authen_status`) VALUES (?,?,?)";
    public $stmt_query_where = "";
    public $stmt_query_all = "";

    public function __construct($pdo , $username , $password , $first_name , $last_name , $phone_number , $email , $per_status = 2){
        $this->$pdo = $pdo;
        $this->username     = $username;
        $this->password     = $password;
        $this->first_name   = $first_name;
        $this->last_name    = $last_name;
        $this->phone_number = $phone_number;
        $this->email        = $email;
        $this->per_status   = $per_status;
    }
    public function getID(){
        return $this->id;
    }
    
    public function selectByWhere()
    {
        $stmt = $this->pdo->prepare($this->stmt_query_where);
        $stmt->execute([$this->getID()]);
        return $stmt;    
    }
    public function selectAll()
    {
        $stmt = $this->pdo->query($this->stmt_query_all);
        $stmt->execute();
        return $stmt; 
    }
    
    public function insertData()
    {
        try {
            
            $stmt = $this->pdo->prepare($this->stmt_insert);
            $stmt->execute([$this->username,$this->password,$this->per_status]);
            echo json_encode(array('status'=>1));
   
        } catch (PDOException $err) {
            echo json_encode(array('status'=>2));
        }        
    }
}

$customer = new Customer('sssss');
$customer->getUsername();
?>