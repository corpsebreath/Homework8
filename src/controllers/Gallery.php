<?php

namespace src\controllers;

use src\core\Viewer;
use src\models\Galleries;


class Gallery
{
    public function index()
    {
        $model = new Galleries();
        $data['$galleries'] = $model->findOne(1);
        Viewer::view('Gallery', 'gallery_index', $data);
    }

    public function create()
    {
        $model = new Galleries();
        $data['$galleries'] = $model->findOne(1);
        Viewer::view('Gallery','gallery_create', $data);
    }

    public function update()
    {
        $model = new Galleries();
        $data['$galleries'] = $model->findOne(1);
        Viewer::view('Gallery','gallery_update', $data);
    }

    public function delete()
    {
        $model = new Galleries();
        $data['$galleries'] = $model->findOne(1);
        Viewer::view('Gallery','gallery_delete', $data);
    }
}
