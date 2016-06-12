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

    public function actionUpdateNews($id)
    {
        $news = new NewsModel;
        $news->data = $_POST;
        $news->data['datetime'] = date("Y-m-d H:i:s");
        $news->updateByPk($id);
        header('Location: /news/one/' . $id);
    }

    public function actionDeleteNews($id)
    {
        $news = new NewsModel;
        $news->deleteByPk($id);
        header('Location: /news/all');
    }
}