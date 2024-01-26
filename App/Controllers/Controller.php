<?php

namespace App\Controllers;


class Controller
{
    function index()
    {
        $this->sayHello();
    }

    private function sayHello()
    {
        echo "Hello, this is Controller";
    }
}