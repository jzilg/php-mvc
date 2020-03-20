<?php

namespace resources\user;

require_once './private/entities/User.php';
require_once './private/models/User.php';
require_once './private/core/MySql.php';

use entities\user\User as UserEntity;
use models\user\User as UserGateway;
use MySql\MySql;

class User implements UserGateway
{
    public function getUsers()
    {
        $query = 'SELECT * FROM `user`';

        $response = MySql::query($query);

        $users = array();

        while ($data = $response->fetch_assoc()) {
            $user = new UserEntity();
            $user->id = $data['id'];
            $user->email = $data['email'];

            array_push($users, $user);
        }

        return $users;
    }

    public function getUser($id)
    {
        if ($id == '') {
            return;
        }

        $query = 'SELECT * FROM `user` WHERE `id` = '. $id;

        $response = MySql::query($query);
        $data = $response->fetch_assoc();

        $user = new UserEntity();
        $user->id = $data['id'];
        $user->email = $data['email'];

        return $user;
    }

    public function createUser($user)
    {
        $query = 'INSERT INTO `user` (`id`, `email`) VALUES (NULL, "'. $user->email .'")';

        MySql::query($query);
    }

    public function updateUser($user)
    {
        $query = 'UPDATE `user` SET `email` = "'. $user->email .'" WHERE `id` = '. $user->id;

        MySql::query($query);
    }

    public function deleteUser($id)
    {
        $query = 'DELETE from `user` WHERE `id` = '. $id;

        MySql::query($query);
    }
}
