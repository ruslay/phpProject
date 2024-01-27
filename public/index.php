<?php

require dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));
define('LAYOUT', BASE_PATH . '/App/views/layout.php');


use App\Controllers\Router;

$router = new Router();

$router->handler($_SERVER);
