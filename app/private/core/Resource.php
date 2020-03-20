<?php

namespace resource;

require_once './private/core/MySql.php';

use MySql\MySql;

class Resource
{
    private $mysql;

    public function __construct()
    {
        $this->$mysql = new MySql;
    }

    public function escape($string)
    {
        return $this->$mysql::escape($string);
    }
}
