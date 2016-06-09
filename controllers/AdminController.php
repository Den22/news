<?php

class AdminController
{
    public function actionAddNews()
    {
        $article = new NewsModel;
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->author = $_POST['author'];
        $article->datetime = $_POST['datetime'] = date("Y-m-d H:i:s");
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