<?php

class DB {
    public static function connect()
    {
        require './private/config.php';
        $connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        if ($connection->connect_error) {
            echo $connection->connect_error;
        }
    }
}
