<?php

require_once './private/entities/User.php';
require_once './private/core/Controller.php';
require_once './private/resources/User.php';

use resources\user\User as UserResource;
use entities\user\User as UserEntity;

class User extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('user.php');
    }

    protected function index()
    {
        $this->edit();
    }

    protected function edit()
    {
        $params = Router::getParams();
        $url = Router::getControllerUrl();

        $userResource = new UserResource();
        $user = $userResource->getUser($params['id']);

        $this->view->userId = $user->id;
        $this->view->userEmail = $user->email;
        $this->view->formUrl = isset($user->id) ? $url . '/update' : $url . '/create';
        $this->view->overviewUrl = '/';
    }

    protected function update()
    {
        $userResource = new UserResource();

        $user = new UserEntity();
        $user->id = $userResource->escape($_POST['id']);
        $user->email = $userResource->escape($_POST['email']);

        $userResource->updateUser($user);

        Router::redirect('/users');
    }

    protected function create()
    {
        $userResource = new UserResource();

        $user = new UserEntity();
        $user->id = $userResource->escape($_POST['id']);
        $user->email = $userResource->escape($_POST['email']);

        $userResource->createUser($user);

        Router::redirect('/users');
    }

    protected function delete()
    {
        $params = Router::getParams();

        $userResource = new UserResource();
        $userResource->deleteUser($params['id']);

        Router::redirect('/users');
    }
}
