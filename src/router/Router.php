<?php

namespace Router;
use Closure;

final class Router
{
    private static array $routes = [ 'GET' => [], 'POST' => [], 'UPDATE' => [], 'PATCH' => [] ];

    public static final function add(string $method, string $path, callable $function): bool
    {
        $path = '#^' . str_replace(':id', '\d+', $path) . '/?$#';
        self::$routes[$method][$path] = $function;
        return true;
    }

    public static final function get(string $method, string $path): Closure
    {
        foreach (self::$routes[$method] as $route => $callable) {
            if (preg_match($route, $path)) {
                if (preg_match("#/(?<id>\d+)#", $path, $matches)) {
                    $id = $matches['id'];

                    return function () use ($method, $route, $id) {
                        return self::$routes[$method][$route]($id);
                    };
                }

                return function () use ($method, $route) {
                    return self::$routes[$method][$route]();
                };
            }
        }

        return function () {
            http_response_code(STATUS_DATA_NOT_FOUND);
            return [ 'ok' => false, 'status' => STATUS_DATA_NOT_FOUND, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        };
    }

    public static final function remove(string $method, string $path): bool
    {
        if (isset(self::$routes[$method][$path])) {
            unset(self::$routes[$method][$path]);
            return true;
        }

        return false;
    }
}
