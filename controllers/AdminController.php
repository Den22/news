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
        $news->id = $id;
        $news->update();
        header('Location: /news/one/' . $id);
    }

    public function actionDeleteNews($id)
    {
        $news = new NewsModel;
        $news->id = $id;
        $news->delete();
        header('Location: /news/all');
    }
}