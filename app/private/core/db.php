<?php

namespace db;

use mysqli;

class DB {
    public static $connection;

    public static function connect()
    {
        require './private/config.php';
        self::$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        if (self::$connection->connect_error) {
            echo self::$connection->connect_error;
        }
    }
}
