<?php

namespace businessRules\user;

interface User
{
    public function createUser($user);
    public function updateUser($user);
    public function getUser($id);
    public function deleteUser($id);
}
