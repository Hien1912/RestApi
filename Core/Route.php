<?php

namespace Core;

class Route
{
    public static function get($path, $controller)
    {
        if (self::path($path) && self::method('get')) {
            return self::action($controller);
        }
    }

    private static function path($path)
    {
        $path = trim($path, "/");
        $uri = trim($_SERVER["REQUEST_URI"], "/");
        return $uri === $path;
    }

    private static function method($method)
    {
        $method = strtoupper($method);
        return $_SERVER["REQUEST_METHOD"] === $method;
    }

    private static function action($action)
    {
        $controller = "\Controller\\" . explode("@", $action)[0];
        $action = explode("@", $action)[1];
        $controller = new $controller();
        return $controller->$action();
    }
}
