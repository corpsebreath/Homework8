<?php

namespace src\controllers;
use src\core\Viewer;
class Home
{
    public function index()
    {
        Viewer::view('Home', 'home_index');
    }
}
