<?php

namespace resources\user;

require_once './private/entities/User.php';
require_once './private/models/User.php';
require_once './private/core/DB.php';

use entities\user\User as UserEntity;
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

        $user = new UserEntity();

        $user->id = $data['id'];
        $user->email = $data['email'];

        return $user;
    }

    public function createUser($user)
    {}

    public function updateUser($user)
    {}

    public function deleteUser($id)
    {}
}
