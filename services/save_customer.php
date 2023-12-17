<?php
require_once "../class/Connection.php";
require_once "../class/InsertService.php";
// require_once "../library/vendor/autoload.php";
// use Firebase\JWT\JWT;
// use Firebase\JWT\Key;

// $key = 'example_key';
// $payload = [
//     'pass' => 'http://example.org',
// ];

// $jwt = JWT::encode($payload, $key, 'HS256');
// $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

$connection 	= new Connection(true);
$insert_service = new InsertService(Connection::$pdo);

$FIRST_NAME     = filter_input(INPUT_POST,'FIRST_NAME',FILTER_DEFAULT);
$LAST_NAME      = filter_input(INPUT_POST,'LAST_NAME',FILTER_DEFAULT);
$USERNAME       = filter_input(INPUT_POST,'USERNAME',FILTER_DEFAULT);
$PASSWORD       = password_hash(filter_input(INPUT_POST,'PASSWORD',FILTER_DEFAULT),PASSWORD_DEFAULT);
$PHONE_NUMBER   = filter_input(INPUT_POST,'PHONE_NUMBER',FILTER_DEFAULT);
$EMAIL          = filter_input(INPUT_POST,'EMAIL',FILTER_DEFAULT);
$PER_STATUS     = filter_input(INPUT_POST,'PER_STATUS',FILTER_DEFAULT);

$insert_service->InsertTable(
    'INSERT INTO authen_admin ( `first_name`, `last_name`, `phone_number`, `email`, `authen_username`, `authen_password`, `authen_status`) VALUES (?,?,?,?,?,?,?)',
    array($FIRST_NAME,$LAST_NAME,$PHONE_NUMBER,$EMAIL,$USERNAME,$PASSWORD,$PER_STATUS)
);

?>