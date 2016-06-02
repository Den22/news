<?php

class News
    extends AbstractModel
{
    public $author;
    public $datetime;
    protected static $table = 'news';
    protected static $class = 'News';
    protected static $arg = 'datetime';

    public function addNews($title, $text, $author)
    {
        $db = new DataBase(self::$table);
        $this->datetime = date("Y-m-d H:i:s");
        $sql = "
            INSERT INTO news
            (title, text, author, datetime)
            VALUES
            ('" . $title . "',
            '" . $text . "',
            '" . $author . "',
            '" . $this->datetime . "')
        ";
        $db->sql_exec($sql);
    }
}