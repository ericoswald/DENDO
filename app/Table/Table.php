<?php


namespace App\Table;
use App\App;

class Table
{
    protected static $table;


    private static function getTable(){
    if (static::$table === null){
        $class_name = explode('\\',get_called_class());
        static::$table = strtolower(end($class_name));
    }
    return static::$table;
    }


    public static function all()
    {
        $res = App::getDb()->query("SELECT * FROM " . static::getTable()." ", get_called_class());
        return $res;

    }

    public function getNom()
    {
        return $this->nom;
    }

    public static function findById($id){
        $res = App::getDb()->prepare("SELECT * FROM " . static::getTable()." WHERE id = ? ",[$id], get_called_class(),true);

        return $res;
    }


    public static  function test(){
//        var_dump(self::findById(2));
    }
}