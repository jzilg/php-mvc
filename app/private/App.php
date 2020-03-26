<?php

class App
{
    public static function run()
    {
        self::applyRoutes();
    }

    private static function applyRoutes()
    {
        require_once './private/routes.php';
    }
}
