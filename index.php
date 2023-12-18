<?php
require './library/AltoRouter/AltoRouter.php';
require './class/controllers/PlanController.php';
require './class/controllers/CustomerController.php';
include ('./config/config-header.php');

$router = new AltoRouter();
$router->setBasePath('/edu_management');

// GET METHOD
$router->map("GET", "/", function () {
    require_once "./src/customer-management.php";
},'index');
$router->map("GET", "/customer", function () {
    require_once "./src/customer-management.php";
},'customer');
$router->map("GET", "/group-customer", function () {
    require_once "./src/group-customer.php";
},'group-customer');
$router->map("GET", "/editCustomer/[i:id]", function ($id) {
    require "./form/edit-customer.php";
},'editCustomer');
$router->map('GET', '/plan/[i:id]', [new PlanController(), 'show'], 'plan');

// POST METHOD
$router->map('POST', '/insertCustomer', [new CustomerController(), 'insertCustomer'], 'insertCustomer');


$match = $router->match();


// ตรวจสอบ method ที่ใช้ใน request
$requestMethod = $_SERVER['REQUEST_METHOD'];

if( is_array($match) && is_callable( $match['target'] ) ) {
    
    if ($requestMethod === 'GET') {
        include ('./componant/header-template.php'); 
    } elseif ($requestMethod === 'POST') {

    }
    call_user_func_array( $match['target'], $match['params'] );
    include ('./componant/footer-template.php'); 
} else {
echo "ไม่พบหน้าที่ต้องการ";
}


