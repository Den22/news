<?php

function my_autoload($class)
{
    $classParts = explode('\\', $class);
    $classParts[0] = __DIR__;
    $path = implode(DIRECTORY_SEPARATOR, $classParts) . '.php';
    if (file_exists($path)) {
        require $path;
    }
    else {
        throw new Application\classes\E404Exception('Page not found', 404);
    }
}

spl_autoload_register('my_autoload');

require __DIR__ . '/vendor/autoload.php';