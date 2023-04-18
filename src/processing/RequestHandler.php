<?php

namespace Processing;
use Router\Router;
use Exception;

final class RequestHandler
{
    public final function processRequest(): void
    {
        try {
            $executor = Router::get($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
            $response = $executor();

            exit(json_encode($response));
        } catch (Exception $error) {
            exit('Request processing error: ' . $error->getMessage());
        }
    }
}
