<?php

namespace Crud\read\posts;
use Crud\REST;
use Illuminate\Database\Capsule\Manager;

final class PostsReading extends REST
{
    public static final function getPosts(): array
    {
        $response = Manager::table('posts')->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setPostsHateoas($data);
    }

    public static final function getPostByID(int $postID): array
    {
        $response = Manager::table('posts')->where('id', '=', $postID)->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setPostHateoas($data);
    }

    public static final function getPostCommentsByPostID(int $postID): array
    {
        $response = Manager::table('comments')->where('post_id', '=', $postID)->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setPostCommentsHateoas($data);
    }
}
