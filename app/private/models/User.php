<?php

namespace models\user;

interface User
{
    public function createUser($user);
    public function updateUser($user);
    public function getUser($id);
    public function getUsers();
    public function deleteUser($id);
}
