<?php
require_once "../class/Connection.php";
require_once "../class/InsertService.php";

$connection 	= new Connection(true);
$insert_service = new InsertService(Connection::$pdo);

$insert_service->saveCustomers();


?>