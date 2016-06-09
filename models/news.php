<?php

class News
    extends AbstractModel
{
    public $author;
    public $datetime;
    protected static $table = 'news';
    protected static $class = 'News';

    public function addNews()
    {
        $db = new DB();
        $this->datetime = date("Y-m-d H:i:s");
        $sql = "
            INSERT INTO news
            (title, text, author, datetime)
            VALUES
            ('" . $_POST['title'] . "',
            '" . $_POST['text'] . "',
            '" . $_POST['author'] . "',
            '" . $this->datetime . "')
        ";
        $db->sql_exec($sql);
    }
    public static function getAllSortByDatetime()
    {
        $db = new DB(self::$table);
        $sql = ' SELECT * FROM ' . self::$table . ' ORDER BY datetime DESC';
        return $db->sql_query($sql, self::$class);
    }
}