<?php

namespace App\Controllers;


class AboutController
{


    function index()
    {
        $this->sayHello();
    }

    public function sayHello()
    {
        $view = BASE_PATH . '/App/views/about.php';



        ob_start();

        include_once $view;

        $content = ob_get_clean();

        
        $title = "Git aducation about";
        $decs = "Git aducation - about";

        $layout = include_once LAYOUT;
    }
}