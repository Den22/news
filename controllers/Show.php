<?php

namespace Application\Controllers;

use Application\Models\News;
use Application\Classes\View;
use Application\Classes\LogError;

class Show
{
    public function actionAddForm()
    {
        $view = new View();
        $view->display('news/add.php');
    }

    public function actionUpdateForm($id)
    {
        $news = News::findOneByPk($id);
        $view = new View();
        $view->item = $news;
        $view->display('news/update.php');
    }

    public function actionLogs()
    {
        $info = LogError::getLog();
        $view = new View();
        $view->rows = $info;
        $view->display('/log.php');
    }
}