<?php

require_once './private/entities/User.php';
require_once './private/core/Controller.php';
require_once './private/resources/User.php';

use resources\user\User as UserResource;
use entities\user\User as UserEntity;

class Users extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('users.php');
    }

    protected function index()
    {
        $userResource = new UserResource();
        $users = $userResource->getUsers();

        foreach($users as $idx => $user) {
            $users[$idx]->editUrl = 'user/edit/id/'. $user->id;
            $users[$idx]->deleteUrl = 'user/delete/id/'. $user->id;
        }

        $this->view->users = $users;
        $this->view->createUserUrl = '/user/edit/';
    }
}
