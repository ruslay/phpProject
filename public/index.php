<?php

require dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));

use App\Controllers\Router;

$router = new Router();

$router->handler($_SERVER);
