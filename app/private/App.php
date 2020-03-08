<?php

class App
{
    public static function run()
    {
        self::applyRoutes();
    }

    protected static function applyRoutes()
    {
        require_once './private/routes.php';
    }
}
