<?php

namespace MySql;

use mysqli;

class MySql {
    protected static $connection;

    public static function connect()
    {
        require './private/config.php';
        self::$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        if (self::$connection->connect_error) {
            echo self::$connection->connect_error;
        }
    }

    public static function query($query)
    {
        self::connect();

        if (!$data = self::$connection->query($query)) {
            die('MYSQL Error: ' . self::$connection->error . '<br>Query: ' . $query);
        }

        self::$connection->close();

        return $data;
    }

    public static function escape($string)
    {
        self::connect();
        $string = self::$connection->escape_string($string);
        self::$connection->close();
        return $string
    }
}
