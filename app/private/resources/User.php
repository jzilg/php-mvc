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
        if ($id == '') {
            return;
        }

        $query = 'SELECT * FROM `user` WHERE `id` = '. $id;

        DB::connect();
        $response = DB::$connection->query($query);
        $data = $response->fetch_assoc();

        $user = new UserEntity();

        $user->id = $data['id'];
        $user->email = $data['email'];

        return $user;
    }

    public function createUser($user)
    {
        $query = 'INSERT INTO `user` (`id`, `email`) VALUES ('. $user->id .', "'. $user->email .'")';

        DB::connect();
        DB::$connection->query($query);
    }

    public function updateUser($user)
    {
        $query = 'UPDATE `user` SET `email` = "'. $user->email .'" WHERE `id` = '. $user->id;

        DB::connect();
        DB::$connection->query($query);
    }

    public function deleteUser($id)
    {
        $query = 'DELETE from `user` WHERE `id` = '. $user->id;

        DB::connect();
        DB::$connection->query($query);
    }
}
