<?php

namespace Application\Controllers;
use Application\Classes\View;
use Application\Classes\LogError;

class Error
{
    public function actionExceptionAll($e)
    {
        new LogError($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
        $view = new View;
        $view->errorMessage = $e->getMessage();
        $view->errorCode = $e->getCode();
        $view->display('error.php');
    }

    public function actionException404($e)
    {
        $view = new View;
        $view->errorMessage = $e->getMessage();
        $view->errorCode = $e->getCode();
        header("HTTP/1.1 404 Not Found");
        $view->display('error.php');
    }

    public function actionExceptionPDO($e)
    {
        new LogError($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
        $view = new View;
        $view->errorMessage = 'Forbidden';
        $view->errorCode = 403;
        header("HTTP/1.1 403 Forbidden");
        $view->display('error.php');
    }
}