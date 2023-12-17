<?php
require './library/AltoRouter/AltoRouter.php';
require './class/controllers/PlanController.php';
require './class/controllers/CustomerController.php';
include ('./config/config-header.php');

$router = new AltoRouter();
$router->setBasePath('/edu_management');

$router->map("GET", "/", function () {
    require_once "./src/customer-management.php";
},'index');
$router->map('GET', '/insertCustomer/[i:id]/[i:name]', [new CustomerController(), 'customer']);


$router->map("GET", "/customer", function () {
    require_once "./src/customer-management.php";
},'customer');

$router->map("GET", "/group-customer", function () {
    require_once "./src/group-customer.php";
},'group-customer');

$router->map("GET", "/product/[i:id]", function ($id) {
    require "./src/edit.php";
});
$router->map("DELETE", "/product/[i:id]", function ($id) {
    echo "ลบสินค้ารหัส: " . $id;
});
$router->map('GET', '/plan/[i:id]', [new PlanController(), 'show'], 'plan');

$match = $router->match();

include ('./componant/header-template.php'); 

if( is_array($match) && is_callable( $match['target'] ) ) {
call_user_func_array( $match['target'], $match['params'] );
} else {
echo "ไม่พบหน้าที่ต้องการ";
}


