<?php

    class InsertService
    {
        private static $pdo;

        public function __construct($pdo)
        {
            self::$pdo = $pdo;
        }
		
        public function InsertTable(...$args){
           
			// try {				
			// 	$sql_stmt = "INSERT INTO authen_admin ( `authen_username`, `authen_password`, `authen_status`) VALUES (?,?,?)";
			// 	$insert_stmt = self::$pdo->prepare($sql_stmt);
			// 	$insert_stmt ->execute([$username,$password,'1']);
			// 	echo json_encode(array('status' => 1));
				
			// }catch(PDOException $err){
			// 	echo json_encode(array('status' => 0 , 'status_response' =>$err->getMessage()));
			// }
            try {
            	$sql_stmt = $args[0];
				$insert_stmt = self::$pdo->prepare($sql_stmt);
				$insert_stmt ->execute($args[1]);
				echo json_encode(array('status' => 1));
            } catch (PDOException $err) {
                echo json_encode(array('status' => 0 , 'status_response' =>$err->getMessage()));
            }
        }
		
		
		
    }

?>