<?php
require __DIR__ . '/autoload.php';

$request = trim($_SERVER["REQUEST_URI"], '/');
$parts = explode('/', $request);
$parts = array_filter($parts, 'trim');

$ctrl = isset($parts['0']) ? $parts['0'] : 'News';
$act = isset($parts['1']) ? $parts['1'] : 'All';
$id = $parts['2'];

$ClassName = $ctrl . 'Controller';
$controller = new $ClassName;
$method = 'action' . $act;

$controller->$method($id);

