<?php

class NewsModel
    extends AbstractModel
{
    protected static $table = 'news';
//    public $title;
//    public $text;
//    public $author;
//    public $datetime;

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
}