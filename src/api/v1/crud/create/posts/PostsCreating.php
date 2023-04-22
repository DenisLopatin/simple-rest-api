<?php

namespace Crud\create\posts;
use Illuminate\Database\Capsule\Manager;
use Crud\REST;
use Exception;

class PostsCreating extends REST
{
    public static final function createPost(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $post_id = Manager::table('posts')->insertGetId($body_request);
            $post = Manager::table('posts')->select()->where('id', '=', $post_id)->get();
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $post ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
