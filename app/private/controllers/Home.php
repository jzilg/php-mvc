<?php

require_once './private/core/Controller.php';
require_once './private/resources/User.php';

use resources\user\User as UserResource;

class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('home.php');
    }

    protected function user()
    {
        $params = Router::getParams();

        $userResource = new UserResource();
        $user = $userResource->getUser($params['id']);

        $this->view->userId = $user->id;
        $this->view->userEmail = $user->email;
    }
}
