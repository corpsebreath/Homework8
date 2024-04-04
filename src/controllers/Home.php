<?php

namespace src\controllers;
use src\core\Viewer;
use src\models\Posts;

class Home
{
    public function index()
    {
        $model = new Posts();
        $data['$posts'] = $model->findOne(1);
        Viewer::view('Home', 'home_index', $data);
    }
}
