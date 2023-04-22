<?php

namespace Crud\create\posts;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Illuminate\Database\Capsule\Manager;
use Crud\REST;
use Exception;

final class PostsCreating extends REST
{
    public static final function createPost(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $post_id = Manager::table('posts')->insertGetId($body_request);
            $post = Manager::table('posts')->select()->where('id', '=', $post_id)->get();

            http_response_code(STATUS_CREATED);
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $post ];
        } catch (Exception $error) {
            $log = new Logger('v1 create post');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
