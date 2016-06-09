<?php

class DB
{
    private $dbh;

    public function __construct()
    {
        $dsb = 'mysql:dbname=news;host=localhost';
        $this->dbh = new PDO ($dsb, 'root', '');
    }

    public function query($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }
}
/*
protected $link;

public function __construct($bdName = 'news', $login = 'root', $password = '')
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
*/