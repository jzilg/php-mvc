<?php

namespace resources\user;

require_once './private/core/DB.php';

use db\DB;

class User
{
    public function __construct($object)
    {
        $data = self::getData();

        $object->setId($data['id']);
        $object->setEmail($data['email']);
    }

    public static function getData()
    {
        DB::connect();

        $query = 'SELECT * from user';
        $response = DB::$connection->query($query);
        $data = $response->fetch_assoc();

        return $data;
    }
}
