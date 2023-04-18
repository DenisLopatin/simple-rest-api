<?php

namespace Crud\read\posts;
use Crud\CRUD;

final class Posts extends CRUD
{
    public final function getAllPosts(): array
    {
        $response = $this->database::table('posts')->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getPostByID(int $postID): array
    {
        $response = $this->database::table('posts')->where('id', '=', $postID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getPostCommentsByPostID(int $postID): array
    {
        $response = $this->database::table('comments')->where('post_id', '=', $postID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }
}
