<?php
require './library/AltoRouter/AltoRouter.php';
require './class/controllers/PlanController.php';
include ('./config/config-header.php');

$router = new AltoRouter();
$router->setBasePath('/edu_management');

// $router->map('GET','/plan',  function() {
//     $param1 = $_GET['id'] ?? null;
//     $param2 = $_GET['action'] ?? null;
//     require __DIR__ . '/src/edit.php';
// } , 'plan');

// // match current request
// $match = $router->match();

// if( $match && is_callable( $match['target'] ) ) {
//     call_user_func_array( $match['target'], $match['params'] ); 
// } else {
//     // no route was matched
//     header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
// }


$router->map("GET", "/", function () {
    echo "หน้าแรกของเว็บ";
});
$router->map("GET", "/product", function () {
    echo "สินค้าทั้งหมด";
});
$router->map("POST", "/product", function () {
    echo "เพิ่มสินค้า";
});
$router->map("GET", "/product/[i:id]", function ($id) {
    require "./src/edit.php";
});
$router->map("DELETE", "/product/[i:id]", function ($id) {
    echo "ลบสินค้ารหัส: " . $id;
});
// ใช้ Closure Bind
$router->map('GET', '/plan/[i:id]', [new PlanController(), 'show'], 'plan');

$match = $router->match();
if( is_array($match) && is_callable( $match['target'] ) ) {
call_user_func_array( $match['target'], $match['params'] );
} else {
echo "ไม่พบหน้าที่ต้องการ";
}