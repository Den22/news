<?php

require __DIR__ . '/autoload.php';

use Application\Controllers\Error;
use Application\Classes\E404Exception;

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$parts = explode('/', trim($request, ' /'));

$ctrl = !empty($parts['0']) ? ucfirst($parts['0']) : 'News';
$act = !empty($parts['1']) ? ucfirst($parts['1']) : 'All';
$id = !empty($parts['2']) ? ucfirst($parts['2']) : NULL;

try {
    $ClassName = 'Application\Controllers\\' . $ctrl;
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
}






