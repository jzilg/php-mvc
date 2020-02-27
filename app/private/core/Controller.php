<?php

class Controller
{
    public function __construct()
    {
        require_once('./private/core/View.php');
        $this->view = new View;
    }
}
