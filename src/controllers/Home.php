<?php

namespace src\controllers;
use src\core\Viewer;
use src\models\Posts;

class Home
{
    public function index()
    {
        if (!empty($_POST['save'])) {
            $model = new Posts();
            $model->insert($_POST);
        }
        Viewer::view('Home', 'home_index');
    }
}
