<?php

namespace Processing;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Router\Router;
use Exception;

final class RequestHandler
{
    public function __construct(private readonly FilesystemAdapter $cache) {}

    public final function processRequest(): void
    {
        try {
            if ($this->cache->hasItem(REQUEST_URI) && REQUEST_FROM_CACHE) {
                http_response_code(STATUS_DATA_FROM_CACHE);
                $data = $this->cache->getItem($_SERVER['REQUEST_URI'])->get();
                $data['status'] = STATUS_DATA_FROM_CACHE;
                exit(json_encode($data));
            }

            $executor = Router::get(REQUEST_METHOD, REQUEST_URI);
            $response = CACHE_REQUEST ? $this->cache->get(REQUEST_URI, $executor) : $executor();

            exit(json_encode($response));
        } catch (Exception $error) {
            exit('Request processing error');
        }
    }
}
