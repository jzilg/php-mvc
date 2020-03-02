<?php

class App
{
    public static function run()
    {
        self::applyRoutes();
        self::connectToDB();
    }

    protected static function applyRoutes()
    {
        require_once './private/routes.php';
    }

    protected static function connectToDB()
    {
        require_once './private/core/db.php';
        DB::connect();
    }
}
