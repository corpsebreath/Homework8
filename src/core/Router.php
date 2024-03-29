<?php

namespace src\core;

final class Router
{
    public function run()
    {
        $var = (str_replace("/", "", $_SERVER["REQUEST_URI"]));
        $constPath = "src\controllers\\";
        $path = $constPath . (empty($var) ? 'Home' : $var);
        if (!class_exists($path)) {
            $path = $constPath . 'error';
        }
        $controller = new $path;
        $controller->index();
    }
}