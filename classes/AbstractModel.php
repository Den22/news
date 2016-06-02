<?php

abstract class AbstractModel
{
    public $title;
    public $text;
    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DataBase(static::$table);
        $sql = ' SELECT * FROM ' . static::$table;
        return $db->sql_query($sql, static::$class);
    }

    public static function getOne($id)
    {
        $db = new DataBase(static::$table);
        $sql = "
            SELECT *
            FROM " . static::$table . "
            WHERE id = '" . $id . "'
        ";
        $res = $db->sql_query($sql, static::$class);
        return $res['0'];
    }

    public static function sortByDateTime($arr)
    {
        function fs($a, $b)
        {
            if ($a->datetime == $b->datetime) {
                return 0;
            }
            return ($a->datetime > $b->datetime) ? -1 : 1;
        }
        usort($arr, 'fs');
        return $arr;
    }

}