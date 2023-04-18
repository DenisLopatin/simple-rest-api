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
            if ($this->cache->hasItem($_SERVER['REQUEST_URI'])) {
                $data = $this->cache->getItem($_SERVER['REQUEST_URI'])->get();
                $data['status'] = STATUS_DATA_FROM_CACHE;
                exit(json_encode($data));
            }

            $executor = Router::get($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
            $response = $this->cache->get($_SERVER['REQUEST_URI'], $executor);

            exit(json_encode($response));
        } catch (Exception $error) {
            exit('Request processing error: ' . $error->getMessage());
        }
    }
}
