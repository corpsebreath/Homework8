<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Users;

class About
{
    public function index()
    {
        $model = new Users();
        $data['$users'] = $model->findOne(1);
        Viewer::view('About','about_index', $data);
    }

    public function page()
    {
        $model = new Users();
        $data['$users'] = $model->findOne(1);
        Viewer::view('About','about_page', $data);
    }
}
