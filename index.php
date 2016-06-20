<?php

require __DIR__ . '/autoload.php';

$request = trim($_SERVER["REQUEST_URI"], '/');
$parts = explode('/', $request);
$parts = array_filter($parts, 'trim');

$ctrl = isset($parts['0']) ? $parts['0'] : 'News';
$act = isset($parts['1']) ? $parts['1'] : 'All';
$id = isset($parts['2']) ? $parts['2'] : NULL;

$ClassName = $ctrl . 'Controller';
$method = 'action' . $act;

try {
    $controller = new $ClassName;
    $controller->$method($id);
} catch (E404Exception $e) {
    $controller = new AdminController;
    $controller->actionException404($e);
} catch (PDOException $e) {
    $controller = new AdminController;
    $controller->actionExceptionPDO($e);
}






