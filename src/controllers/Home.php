<?php

namespace src\controllers;
use src\core\Viewer;
use src\models\Posts;
use src\models\Users;

class Home
{
    public function index()
    {
        $model = new Posts();
        $data['$posts'] = $model->findAll();
        Viewer::view('Home', 'home_index', $data);
    }

    public function update(){
        if(!empty($_POST['save'])){
            $this->model = new Posts();
            $this->model->update($_POST, $_POST['post_id']);
            header('Location: /home/update');
        }
        Viewer::view('Home', 'home_update');
    }

    public function delete(){
        if(!empty($_GET['id'])){
            $this->model = new Posts();
            $this->model->Delete($_GET['id']);
        }
        header('Location: /home');
    }
}
