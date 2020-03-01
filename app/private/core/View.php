<?php

class View
{
    public function render($viewFile)
    {
        $this->styelUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/public/style.css';

        require_once('./private/views/partials/header.php');
        require_once('./private/views/' . $viewFile);
        require_once('./private/views/partials/footer.php');
    }
}
