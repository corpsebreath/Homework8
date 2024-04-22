<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Posts;
use src\models\Users;
use src\models\Model;

class About
{
    public function index()
    {
        $model = new Users();
        $data['$users'] = $model->findAll();
        Viewer::view('Home', 'home_index', $data);
    }

    public function page()
    {
        if (!empty($_POST['save'])) {
            $model = new Users();
            $model->insert($_POST);
        }
        Viewer::view('About','about_page');
    }

    public function update()
    {
        if(!empty($_POST['save'])){
            $this->model = new Users();
            $this->model->update($_POST, $_POST['id']);
            header('Location: /about/page');
        }
        Viewer::view('About', 'about_page');
    }

    public function delete()
    {
        if(!empty($_GET['id'])){
            $this->model = new Users();
            $this->model->delete($_GET['id']);
        }

        header('Location: /about/page');
    }
}
