<?php

require_once __DIR__ . '/../class/class_Article.php';


class News extends Article
{
    public $author;
    public $datetime;
    private $database;

    public function __construct()
    {
        $this->database = new DataBase('news');
    }

    public function add_News($title, $text, $author)
    {
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
        $this->database->sql_exec($sql);
    }

    public function get_News($topic_id)
    {
        $sql = "
            SELECT *
            FROM news
            WHERE id = '" . $topic_id . "'
        ";
        $res = $this->database->sql_query($sql, 'News');
        return $res['0'];
    }

    public function getNewsList()
    {
        $sql = "
            SELECT *
            FROM news
            ORDER BY datetime DESC
        ";
        return $this->database->sql_query($sql, 'News');
    }

}