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
        if (empty($news)){
            throw new E404Exception('Page not found', 404);
        }
        $view = new View();
        $view->item = $news;
        $view->display('news/one.php');
    }

    public function actionShowAddForm()
    {
        $view = new View();
        $view->display('news/add.php');
    }

    public function actionShowUpdateForm($id)
    {
        $news = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $news;
        $view->display('news/update.php');
    }
}
