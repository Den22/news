<?php

class AdminController
{
    public function actionAddNews()
    {
        $news = new News;
        $news->addNews();
        header('Location: /News/AllSort');
    }
    public function actionAddView()
    {
        include __DIR__ . '/../views/add.php';
    }
}