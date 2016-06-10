<?php

class DB
{
    private $dbh;
    public $className = 'stdClass';

    public function __construct()
    {
        $this->dbh = new PDO ('mysql:dbname=news;host=localhost', 'root', '');
    }

    public function query($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }
}