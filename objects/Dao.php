<?php

namespace Valarep\objects;
use \PDO;

class Dao
{
    private static $host = "127.0.0.1";
    private static $port = "3306";
    private static $database = "monsite";
    private static $charset = "UTF8";
    private static $user = "root";
    private static $password = "";
    private static $connection;

    public static function open()
    {
        $dsn = "mysql:" .
                "host=" . self::$host . ";" .
                "port=" . self::$port . ";" .
                "dbname=" . self::$database . ";" . 
                "charset=" . self::$charset . ";";

        return self::$connection = new PDO($dsn, self::$user, self::$password);
    }

    public static function close()
    {
        self::$connection == null;
    }
}