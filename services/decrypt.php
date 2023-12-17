<?php
require_once "../library/vendor/autoload.php";
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = [
    'pass' => 'http://example.org',
];

$jwt = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwYXNzIjoiaHR0cDovL2V4YW1wbGUub3JnIn0.-J5_0Pq5F_lmEjT0z94USENB5j6DYaVTYo_SfQk37iM";
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));
print_r($decoded);
?>