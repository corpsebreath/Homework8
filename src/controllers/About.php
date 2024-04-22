<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Users;
use src\models\Model;

class About
{
    public function index()
    {
        if (!empty($_POST['save'])) {
            $model = new Users();
            $model->insert($_POST);
        }
        Viewer::view('About','about_index');
    }

    public function page()
    {
        if (!empty($_POST['save'])) {
            $model = new Users();
            $model->insert($_POST);
        }
        Viewer::view('About','about_page');
    }
}
