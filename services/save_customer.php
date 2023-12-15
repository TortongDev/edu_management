<?php
require_once "../class/Connection.php";
require_once "../class/InsertService.php";
var_dump($_POST);
$connection 	= new Connection(true);
$insert_service = new InsertService(Connection::$pdo);
$insert_service->saveCustomer($_POST['USERNAME'],$_POST['PASSWORD']);


?>