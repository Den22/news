<?php

namespace Application\Classes;

class LogError
{
    public function __construct($message, $code, $file, $line)
    {
        $res = file_get_contents(__DIR__ . '/../log.txt');
        $data = $res . "\n" . $message . "\n" . $code . "\n" . $file . "\n" . $line . "\n" . date("Y-m-d H:i:s");
        file_put_contents(__DIR__ . '/../log.txt', $data);
    }

    public static function getLog()
    {
        $res = file(__DIR__ . '/../log.txt');
        $rows = array_chunk($res, 5);
        return $rows;
    }
}