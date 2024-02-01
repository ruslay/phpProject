<?php

namespace App\Controllers;


class Controller
{
    function index()
    {
        return $this->sayHello();
    }

    public function sayHello()
    {
        $view = BASE_PATH . '/App/views/main.php';

        $title = "Git aducation";
        $desc = "Git aducation - lesson five";

        ob_start();

        include_once $view;

        $content = ob_get_clean();

        $layout = include_once LAYOUT;
    }
}