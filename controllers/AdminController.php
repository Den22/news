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

    public function actionException404($e)
    {
        $view = new View;
        $view->errorMessage = $e->getMessage();
        $view->errorCode = $e->getCode();
        $view->display('error.php');
    }

    public function actionExceptionPDO($e)
    {
        $logError = new LogError($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
        $logError->addLog();
        $view = new View;
        $view->errorMessage = 'Forbidden';
        $view->errorCode = 403;
        $view->display('error.php');
    }

    public function actionShowLogs()
    {
        $info = LogError::getLog();
        $view = new View();
        $view->rows = $info;
        $view->display('/log.php');
    }
}