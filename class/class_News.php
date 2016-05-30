<?php

require __DIR__ . '/../class/class_Article.php';


class News extends Article
{
    public $author;
    public $datetime;

    public function add_News($title, $text, $author)
    {
        $database = new DataBase('news');
        $datetime = date("Y-m-d H:i:s");
        $sql = "
            INSERT INTO news
            (title, text, author, datetime)
            VALUES
            ('" . $title . "',
            '" . $text . "',
            '" . $author . "',
            '" . $datetime . "')
        ";
        $database->sql_exec($sql);
    }

    public function get_News($topic_id)
    {
        $database = new DataBase('news');
        $sql = "
            SELECT *
            FROM news
            WHERE id = '" . $topic_id . "'
        ";
        $res = $database->sql_query($sql);
        return $res['0'];
    }

    public function getNewsList()
    {
        $database = new DataBase('news');
        $sql = "
            SELECT *
            FROM news
            ORDER BY datetime DESC
        ";
        return $database->sql_query($sql);
    }

}