<?php

class Controller
{
    public function __construct()
    {
        self::createView();
        self::callAction();
    }

    protected function createView()
    {
        require_once('./private/core/View.php');
        $this->view = new View;
    }

    protected function callAction()
    {
        $actionParam = Router::getActionParam();

        if (method_exists($this, $actionParam)) {
            $this->{$actionParam}();
        }
    }
}
