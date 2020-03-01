<?php

class Router
{
    public static $routes = array();

    protected static function getUrlPath()
    {
        $url = $_GET['url'];
        $url = explode('/', $url);
        return $url;
    }

    protected static function getControllerParam()
    {
        $urlPath = self::getUrlPath();
        return $urlPath[0];
    }

    public static function getActionParam()
    {
        $urlPath = self::getUrlPath();
        return $urlPath[1];
    }

    public static function getParams()
    {
        $urlPath = self::getUrlPath();
        $params = array();

        for ($i = 2; $i < sizeof($urlPath); $i = $i + 2) {
            $key = $urlPath[$i];
            $value = $urlPath[$i + 1];
            $value = htmlentities($value);
            $params[$key] = $value;
        }

        return $params;
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
        header('Location: ' . $url);
        die();
    }
}
