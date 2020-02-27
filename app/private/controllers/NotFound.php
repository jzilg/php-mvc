<?php

require_once './private/core/Controller.php';

class NotFound extends Controller
{
    public function __construct()
    {
        parent::__construct();

        http_response_code(404);

        $this->view->render('not-found.php');
    }
}
