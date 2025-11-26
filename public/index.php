<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
} else {
    die("Erro Crítico: Execute 'composer dump-autoload' no terminal.");
}

use Src\Core\Router;

try {
 
    $router = new Router();

    $router->get('/', 'HomeController@index');

    $router->get('/login', 'AuthController@loginForm');
    $router->post('/login', 'AuthController@loginAction');

    $router->get('/teste', 'HomeController@teste');

    $router->dispatch();

} catch (Exception $e) {
    echo "Erro na aplicação: " . $e->getMessage();
}