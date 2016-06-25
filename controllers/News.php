<?php

namespace Application\Controllers;

use Application\Models\News as Model;
use Application\Classes\View;
use Application\Classes\E404Exception;

class News
{
    public function actionAll()
    {
        $news = Model::findAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
    }

    public function actionOne($id)
    {
        $news = Model::findOneByPk($id);
        if (empty($news)){
            throw new E404Exception('Page not found', 404);
        }
        $view = new View();
        $view->item = $news;
        $view->display('news/one.php');
    }
}
