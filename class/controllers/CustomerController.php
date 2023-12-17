<?php
class CustomerController {
    public function customer($id,$name){
        echo "INSERT INTO `authen_admin`(`authen_user_id`, `first_name`, `last_name`, `phone_number`, `email`, `authen_username`, `authen_password`, `authen_status`, `authen_timestamp`) VALUES ()".$id. ' '.$name;
    }
}
?>