<?php

class Controller
{
    protected $view;

    public function __construct()
    {
        self::createView();
        self::callAction();
    }

    private function createView()
    {
        require_once('./private/core/View.php');
        $this->view = new View;
    }

    protected function index()
    {}

    private function callAction()
    {
        $actionParam = Router::getActionParam();

        if (method_exists($this, $actionParam)) {
            $this->{$actionParam}();
        } else {
            $this->index();
        }
    }
}
