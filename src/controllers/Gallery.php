<?php

namespace src\controllers;

use src\core\Viewer;

class Gallery
{
    public function index()
    {
        Viewer::view('Gallery', 'gallery_index');
    }

    public function create()
    {
        Viewer::view('Gallery','gallery_create');
    }

    public function update()
    {
        Viewer::view('Gallery','gallery_update');
    }

    public function delete()
    {
        Viewer::view('Gallery','gallery_delete');
    }
}
