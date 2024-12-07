<?php

namespace App;

class App
{

    const DB_NAME = 'courspoo';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDatabase()
    {
        if (self::$database === null) {
            self::$database = new App\Database('blog');
            return self::$database;
        }
    }
}
