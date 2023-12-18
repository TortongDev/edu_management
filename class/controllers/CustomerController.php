<?php

class CustomerController {
 
    public function insertCustomer(){
        $postData = json_decode(file_get_contents("php://input"), true);
        var_dump($postData);
    }
}
?>