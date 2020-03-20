<?php

class View
{
    public function render($viewFile)
    {
        $baseUrl = Router::getBaseUrl();
        $this->styelUrl = $baseUrl . '/public/style.css';

        require_once('./private/views/partials/head.php');
        require_once('./private/views/' . $viewFile);
        require_once('./private/views/partials/footer.php');
    }
}
