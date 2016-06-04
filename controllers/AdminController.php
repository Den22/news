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
        $view = new View();
        $view->display('news/add.php');
    }
}