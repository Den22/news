<?php

class AdminController
{
    public function actionAddNews()
    {
        $news = new News;
        $news->addNews();
        $controller = new NewsController;
        $controller->actionAllSort();
    }

    public function actionViewAdd()
    {
        $view = new View();
        $view->display('news/add.php');
    }
}