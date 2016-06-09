<?php

class NewsController
{
    public function actionAll()
    {
        $news = NewsModel::findAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
    }

    public function actionOne($id)
    {
        $news = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $news;
        $view->display('news/one.php');
    }
}
