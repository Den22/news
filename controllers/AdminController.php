<?php

require_once __DIR__ . '/../models/News.php';
require_once __DIR__ . '/../classes/DataBase.php';

class AdminController
{
    public function actionAddNews()
    {
        $news = new News;
        $news->addNews(
            $_POST['title'],
            $_POST['text'],
            $_POST['author']
        );
        $items = News::getAll();
        include __DIR__ . '/../views/all.php';
    }
}