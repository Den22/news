<?php

abstract class AbstractModel
{
    public $title;
    public $text;
    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB();
        $sql = ' SELECT * FROM ' . static::$table;
        return $db->sql_query($sql, static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB();
        $sql = "
            SELECT *
            FROM " . static::$table . "
            WHERE id = '" . $id . "'
        ";
        $res = $db->sql_query($sql, static::$class);
        return $res['0'];
    }
}
