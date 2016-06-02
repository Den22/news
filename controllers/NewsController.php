<?php

class NewsController
{
    public function actionAll()
    {
        $items = News::getAll();
        $items = News::sortByDateTime($items);
        include __DIR__ . '/../views/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $topic = News::getOne($id);
        include __DIR__ . '/../views/one.php';
    }
}
