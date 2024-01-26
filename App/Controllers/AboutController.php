<?php

namespace App\Controllers;


class AboutController
{
    function index()
    {
        $this->sayHello();
    }

    private function sayHello()
    {
        echo "Hello, this is AboutController";
    }
}