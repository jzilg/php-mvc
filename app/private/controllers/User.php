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
    }

    protected function update()
    {
        $user = new UserEntity();
        $user->id = $_POST['id'];
        $user->email = $_POST['email'];

        $userResource = new UserResource();
        $userResource->updateUser($user);

        Router::redirect('/user/edit/id/' . $user->id);
    }

    protected function create()
    {
        $user = new UserEntity();
        $user->id = $_POST['id'];
        $user->email = $_POST['email'];

        $userResource = new UserResource();
        $userResource->createUser($user);

        Router::redirect('/user/edit/id/' . $user->id);
    }

    protected function delete()
    {}
}
