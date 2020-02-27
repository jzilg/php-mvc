<?php

class Router
{
    public static $routes = array();

    public static function add($route, $function)
    {
        self::$routes[] = $route;

        if ($_GET['url'] == $route) {
            $function->__invoke();
        }
    }

    public static function addFallback($function)
    {
        if (!in_array($_GET['url'], self::$routes)) {
            $function->__invoke();
        }
    }

    public static function redirect(string $url)
    {
        header('Location: '. $url);
        die();
    }
}
