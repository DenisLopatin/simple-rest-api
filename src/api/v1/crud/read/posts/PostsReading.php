<?php

namespace Crud\read\posts;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class PostsReading extends REST
{
    public static final function getPosts(): array
    {
        try {
            $response = Manager::table('posts')->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setPostsHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('v1 get posts');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getPostByID(int $postID): array
    {
        try {
            $response = Manager::table('posts')->where('id', '=', $postID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setPostHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get post by id');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getPostCommentsByPostID(int $postID): array
    {
        try {
            $response = Manager::table('comments')->where('post_id', '=', $postID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setPostCommentsHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get post comments');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
