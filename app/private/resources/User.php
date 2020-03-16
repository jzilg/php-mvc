<?php

namespace resources\user;

require_once './private/core/DB.php';

use db\DB;

class User
{
    public function __construct($object, $id)
    {
        $data = self::getUserById($id);

        $object->setId($data['id']);
        $object->setEmail($data['email']);
    }

    public static function getUserById($id)
    {
        DB::connect();

        $query = 'SELECT * FROM user WHERE id = '. $id;
        $response = DB::$connection->query($query);
        $data = $response->fetch_assoc();

        return $data;
    }
}
