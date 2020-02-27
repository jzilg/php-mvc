<?php

require_once './private/core/Controller.php';

class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('home.php');
    }

    protected function foo()
    {
        $this->view->foo = 'bar';
    }
}
