<?php

class DataBase
{
    protected $link;

    public function __construct($bdName, $login = 'root', $password = '')
    {
        $this->link = mysqli_connect('localhost', $login, $password, $bdName);
        if (mysqli_connect_errno()) {
            $_SESSION['error'] = "Подключение невозможно: " . mysqli_connect_error();
            exit;
        }
    }

    public function sql_exec($sql)
    {
        return mysqli_query($this->link, $sql);
    }

    public function sql_query($sql, $class = 'stdClass')
    {
        $ret = [];
        if ($res = mysqli_query($this->link, $sql)) {
            while ($row = mysqli_fetch_object($res, $class)) {
                $ret[] = $row;
            }
        } else {
            return false;
        }
        return $ret;
    }
}