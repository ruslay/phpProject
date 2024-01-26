<?php

namespace App\Controllers;

use \FastRoute\RouteCollector;
use function \FastRoute\simpleDispatcher;


class Router
{

    public function handler($server){

        

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];
    
        $dispatcher = simpleDispatcher(function(\FastRoute\RouteCollector $r) {

            $routes = include_once BASE_PATH . '/web/routes.php';
            
            foreach($routes as $route) {
                $r->addRoute(...$route);
            }
            
        });
    
        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

        [$status, [$controller, $method], $vars] = $routeInfo;

        //var_dump($routeInfo);die;

        $response = (new $controller())->$method($vars);

        return $response;
    }


}

