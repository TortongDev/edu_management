<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require './library/vendor/autoload.php';

use FastRoute\RouteCollector;
use FastRoute\Dispatcher;

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/home', function(){
        echo "seccess";
    });
    $r->addRoute('GET', '/about', 'AboutController@index');
    $r->addRoute('GET', '/contact', 'ContactController@index');
    // เพิ่มเส้นทางเพิ่มเติมตามที่คุณต้องการ
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo '404 Not Found.';
        break;
    case Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo '405 Method Not Allowed';
        break;
    case Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        [$class, $method] = explode('@', $handler);
        $controller = new $class();
        $controller->$method($vars);
        break;
}
