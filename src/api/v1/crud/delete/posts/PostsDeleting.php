<?php

namespace Crud\delete\posts;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class PostsDeleting extends REST
{
    public static final function deletePost(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $post = Manager::table('posts')->where('id', '=', $body_request)->get();
            Manager::table('posts')->delete($body_request);
            return [ 'ok' => true, 'status' => STATUS_DATA_REMOVED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $post ];
        } catch (Exception $error) {
            $log = new Logger('delete post');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
