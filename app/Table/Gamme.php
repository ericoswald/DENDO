<?php

namespace App\Table;
use App\App;
class Gamme extends Table
{
    protected static $table = 'gamme';
    public static function getGamme(){
        return App::getDb()->query('SELECT * FROM gamme ', __CLASS__);
    }


}