<?php

require __DIR__ . '/autoload.php';
require __DIR__ . '/config.php';

use Application\Controllers\Error;
use Application\Classes\E404Exception;
use Application\Classes\AllException;

$timer = new PHP_Timer();
$timer->start();

//Пример использование twig
//use Application\Models\News;
//$news = News::findAll();
//
//Twig_Autoloader::register();
//$loader = new Twig_Loader_Filesystem('templates');
//$twig = new Twig_Environment($loader);
//
//$template = $twig->loadTemplate('index.html');
//$title = "Название страницы";
//echo $template->render([
//    'title' => $title,
//    'articles' => $news
//]);
//die;

try {
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $parts = explode('/', trim($request, ' /'));
    if (!empty($parts['3'])) {
        throw new E404Exception('Page not found', 404);
    }

    $ctrl = !empty($parts['0']) ? ucfirst($parts['0']) : 'News';
    $act = !empty($parts['1']) ? ucfirst($parts['1']) : 'All';
    $id = !empty($parts['2']) ? ucfirst($parts['2']) : null;

    $ClassName = 'Application\\Controllers\\' . $ctrl;
    $method = 'action' . $act;
    if (!method_exists($ClassName , $method)) {
        throw new E404Exception('Page not found', 404);
    }
    $controller = new $ClassName;
    $controller->$method($id);
} catch (E404Exception $e) {
    $controller = new Error;
    $controller->actionException404($e);
} catch (PDOException $e) {
    $controller = new Error;
    $controller->actionExceptionPDO($e);
} catch (AllException $e) {
    $controller = new Error;
    $controller->actionExceptionAll($e);
}
echo $timer->stop();








