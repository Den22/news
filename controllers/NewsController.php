<?php

class NewsController
{
    public function actionAll()
    {

        $news = News::getAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');

    }

    public function actionAllSort()
    {
        $db = new DB();
        $res = $db->query(
            'SELECT * FROM news WHERE id=:id',
            [':id' => 1]
        );
        var_dump($res);
        die;
        /*
        $news = News::getAllSortByDatetime();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
        */
    }

    public function actionOne($id)
    {
        $news = News::getOne($id);
        $view = new View();
        $view->item = $news;
        $view->display('news/one.php');
    }
}
