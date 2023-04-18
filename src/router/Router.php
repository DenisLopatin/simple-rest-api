<?php

namespace Router;
use Exception;

final class Router
{
    private static array $routes = [ 'GET' => [], 'POST' => [], 'UPDATE' => [], 'PATCH' => [] ];

    public static function add(string $method, string $path, callable $function): bool
    {
        $path = '#^' . str_replace(':id', '\d+', $path) . '/?$#';
        self::$routes[$method][$path] = $function;
        return true;
    }

    public static function get(string $method, string $path): mixed
    {
        foreach (self::$routes[$method] as $route => $callable) {
            if (preg_match($route, $path)) {

                if (preg_match("#/(?<id>\d+)#", $path, $matches)) {
                    $id = $matches['id'];

                    return function () use ($method, $route, $id) {
                        return self::$routes[$method][$route]($id);
                    };
                }

                return self::$routes[$method][$route];
            }
        }

        return function () {
            return [ 'status' => 400, 'message' => CANNOT_FIND_ROUTER, 'data' => [] ];
        };
    }

    public static function remove(string $method, string $path): bool
    {
        if (isset(self::$routes[$method][$path])) {
            unset(self::$routes[$method][$path]);
            return true;
        }

        return false;
    }
}
