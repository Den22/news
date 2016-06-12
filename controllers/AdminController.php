<?php

class AdminController
{
    public function actionAddNews()
    {
        $news = new NewsModel;
        $news->data = $_POST;
        $news->data['datetime'] = date("Y-m-d H:i:s");
        $news->insert();
        header('Location: /news/one/' . $news->id);
    }

    public function actionViewAdd()
    {
        $view = new View();
        $view->display('news/add.php');
    }

    public function actionViewUpdate($id)
    {
        $news = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $news;
        $view->display('news/update.php');
    }

    public function actionUpdateNews($id)
    {
        $news = new NewsModel;
        $news->data = $_POST;
        $news->data['datetime'] = date("Y-m-d H:i:s");
        $news->update($id);
        header('Location: /news/one/' . $id);
    }
}