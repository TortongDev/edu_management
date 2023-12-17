<?php

    class SelectService
    {
        private static $pdo;

        public function __construct($pdo)
        {
            self::$pdo = $pdo;
        }
		
        public function SelectTable(...$args){
           
            try {
            	$sql_stmt = $args[0];
				$stmt = self::$pdo->prepare($sql_stmt);
				$stmt->execute($args[1]);
                return $stmt;
            } catch (PDOException $err) {
                echo json_encode(array('status' => 0 , 'status_response' =>$err->getMessage()));
            }
        }
		
		
		
    }

?>