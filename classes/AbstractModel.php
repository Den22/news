<?php

abstract class AbstractModel
{
    static protected $table;
    public static $column;
    public static function findAll()
    {
        $db = new DB();
        $db->className = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $db = new DB();
        $db->className = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        return $db->query($sql, [':id' => $id])[0];
    }

    public function insert()
    {
        $time= '1:29';
    }
}
