<?php

    class InsertService
    {
        private static $pdo;

        public function __construct($pdo)
        {
            self::$pdo = $pdo;
        }
		
        public function saveCustomer($first_name,$last_name,$per_email,$per_phone,$username,$password){
			try {				
				$sql_stmt = "INSERT INTO tb_customers_user () VALUES ()";
				$insert_stmt = self::$pdo->prepare($sql_stmt);
				$insert_stmt ->execute([$first_name,$last_name,$per_email,$per_phone,$username,$password]);
				echo json_encode(array('status' => 1));
				
			}catch(PDOException $err){
				echo json_encode(array('status' => 0 , 'status_response' =>$err->getMessage()));
			}
        }
		
		
		
    }

?>