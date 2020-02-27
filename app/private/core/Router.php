<?php

class Router
{
    public static $routes = array();

    protected static function getUrlParams() {
        $url = $_GET['url'];
        $url = explode('/', $url);
        return $url;
    }

    protected static function getControllerParam() {
        $urlParams = self::getUrlParams();
        return $urlParams[0];
    }

    public static function getActionParam() {
        $urlParams = self::getUrlParams();
        return $urlParams[1];
    }

    public static function add($route, $function)
    {
        self::$routes[] = $route;

        $controllerParam = self::getControllerParam();

        if ($controllerParam == $route) {
            $function->__invoke();
        }
    }

    public static function addFallback($function)
    {
        $controllerParam = self::getControllerParam();

        if (!in_array($controllerParam, self::$routes)) {
            $function->__invoke();
        }
    }

    public static function redirect(string $url)
    {
        header('Location: '. $url);
        die();
    }
}
