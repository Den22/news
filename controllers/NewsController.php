<?php

class NewsController
{
    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/all.php';
    }
    public function actionAllSort()
    {
        $items = News::getAllSortByDatetime();
        //$items = News::sortByDateTime($items);
        include __DIR__ . '/../views/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/one.php';
    }
}
