<?php

namespace src\controllers;
use src\core\Viewer;
use src\models\Posts;
use src\orm\Connect;

class Home
{
    public function index()
    {
        $model = new Connect();
        $connect = $model->getConnect();
        $sql = $connect->query('SELECT * FROM users');
        $sql->execute();
        $result = $sql->fetchAll($connect::FETCH_ASSOC);
        var_dump($result);
        $models = new Posts();
        $data['$posts'] = $models->findOne(1);
        Viewer::view('Home', 'home_index', $data);
    }
}
