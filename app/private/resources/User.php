<?php

namespace resources\user;

require_once './private/business-rules/User.php';
require_once './private/core/DB.php';

use db\DB;
use businessRules\user\User as UserGateway;

class User implements UserGateway
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function getUser($id)
    {
        DB::connect();

        $query = 'SELECT * FROM user WHERE id = '. $id;
        $response = DB::$connection->query($query);
        $data = $response->fetch_assoc();

        $this->user->setId($data['id']);
        $this->user->setEmail($data['email']);
    }

    public function createUser($user)
    {}

    public function updateUser($user)
    {}

    public function deleteUser($id)
    {}
}
