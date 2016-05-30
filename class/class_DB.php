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
        mysqli_query($this->link, $sql);
    }

    public function sql_query($sql)
    {
        $ret = [];
        if ($res = mysqli_query($this->link, $sql)) {
            while ($row = mysqli_fetch_assoc($res)) {
                $ret[] = $row;
            }
        } else {
            return false;
        }
        return $ret;
    }
}