<?php

require_once './private/core/Controller.php';

class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->foo = 'bar';
        $this->view->render('home.php');
    }
}
