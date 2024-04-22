<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Galleries;


class Gallery
{
    public function index()
    {
        $model = new Galleries();
        $data['$galleries'] = $model->findAll();
        Viewer::view('Gallery', 'gallery_index', $data);
    }

    public function create()
    {
        if (!empty($_POST['save'])) {
            $model = new Galleries();
            $model->insert($_POST);
        }
        Viewer::view('Gallery','gallery_create');
    }

    public function update()
    {
        if(!empty($_POST['save'])) {
            $model = new Galleries();
            $model->update($_POST, $_POST['gallery_id']);
            header('Location: /gallery/update');
        }
        Viewer::view('Gallery','gallery_update');
    }

    public function delete()
    {
        if (!empty($_GET['id'])) {
            $model = new Galleries();
            $model->delete($_GET['id']);
        }
        header('Location: /gallery');
    }
}
