<?php

namespace MySql;

use mysqli;

class MySql {
    private $connection;

    public function __construct()
    {
        $this->connect();
    }

    public function __destruct()
    {
        $this->$connection->close();
    }

    public function connect()
    {
        require './private/config.php';
        $this->$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        if ($this->$connection->connect_error) {
            echo $this->$connection->connect_error;
        }
    }

    public function query($query)
    {
        if (!$data = $this->$connection->query($query)) {
            die('MYSQL Error: ' . $this->$connection->error . '<br>Query: ' . $query);
        }

        return $data;
    }

    public function escape($string)
    {
        return $this->$connection->escape_string($string);
    }
}
