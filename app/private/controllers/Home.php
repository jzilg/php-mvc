<?php

require_once './private/core/Controller.php';
require_once './private/models/User.php';
require_once './private/resources/User.php';

use models\user\User as UserModel;
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

        $user = new UserModel();
        new UserResource($user);

        $this->view->userId = $user->getId();
        $this->view->userEmail = $user->getEmail();
    }
}
