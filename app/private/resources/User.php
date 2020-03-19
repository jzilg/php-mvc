<?php

namespace resources\user;

require_once './private/models/User.php';
require_once './private/core/DB.php';

use models\user\User as UserGateway;
use db\DB;

class User implements UserGateway
{
    public function getUser($id)
    {
        DB::connect();

        $query = 'SELECT * FROM user WHERE id = '. $id;
        $response = DB::$connection->query($query);
        $data = $response->fetch_assoc();

        return $data;
    }

    public function createUser($user)
    {}

    public function updateUser($user)
    {}

    public function deleteUser($id)
    {}
}
