<?php

require_once "config.php";

class Database
{
    private static $connection;

    /**
    * "static" functions do not need an instance of a class
    */
    public static function connect()
    {
        self::$connection = new PDO ("mysql:host=" . DATABASE_HOST . ";dbname=" . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
    }

    public static function getConnection()
    {
        if (self::$connection == null) {
            self::connect();
        }
        return self::$connection;
    }
}
Database::connect();
