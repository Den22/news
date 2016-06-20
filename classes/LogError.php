<?php


class LogError
{
    public $info;

    public function addLog()
    {
        $info = implode("\n", $this->info);
        $res = file_get_contents(__DIR__ . '/../log.txt');
        $data = $res . "\n" . $info;
        file_put_contents(__DIR__ . '/../log.txt', $data);
    }

    public static function getLog()
    {
        $res = file(__DIR__ . '/../log.txt');
        $rows = array_chunk($res, 5);
        return $rows;
    }
}