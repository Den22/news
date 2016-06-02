<?php

function __autoload($class)
{
    $folders = ['controllers', 'models', 'classes', 'views'];
    foreach ($folders as $folder) {
        $path = __DIR__ . '/' . $folder . '/' . $class . '.php';
        if (file_exists($path)) {
            require $path;
        }
    }
}