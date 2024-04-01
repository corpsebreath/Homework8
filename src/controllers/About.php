<?php

namespace src\controllers;

use src\core\Viewer;

class About
{
    public function index()
    {
        Viewer::view('About','about_index');
    }

    public function page()
    {
        Viewer::view('About','about_page');
    }
}
