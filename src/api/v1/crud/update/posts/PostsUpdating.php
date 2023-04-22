<?php

namespace Crud\update\posts;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class PostsUpdating extends REST
{
    public static final function updatePost(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $body_request['updated_at'] = date('Y-m-d H:i:s', time());
            Manager::table('posts')->where('id', '=', $body_request)->update($body_request);
            $post = Manager::table('posts')->where('id', '=', $body_request)->get();
            return [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $post ];
        } catch (Exception $error) {
            $log = new Logger('v1 update post');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
