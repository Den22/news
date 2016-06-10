<?php

class AdminController
{
    public function actionAddNews()
    {
        $article = new NewsModel;
        $article->data = $_POST;
        $article->data['datetime'] = date("Y-m-d H:i:s");
        $article->insert();
        $controller = new NewsController;
        $controller->actionAll();
    }

    public function actionViewAdd()
    {
        $view = new View();
        $view->display('news/add.php');
    }
}