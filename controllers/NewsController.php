<?php

require_once __DIR__ . '/../classes/DataBase.php';
require_once __DIR__ . '/../models/News.php';

class NewsController
{
    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $topic = News::getOne($id);
        include __DIR__ . '/../views/one.php';
    }
}
