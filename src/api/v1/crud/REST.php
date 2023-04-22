<?php

namespace Crud;
use Illuminate\Database\Capsule\Manager;

abstract class REST
{
   public static final function setUsersHateoas(array $data): array
   {
       $links = [
           'self' => [ 'href' => '/api/v1/users', 'title' => 'Get all users', 'type' => 'application/json' ],
           'user' => [ 'href' => '/api/v1/user/[id]', 'title' => 'Get user by id', 'type' => 'application/json' ],
           'posts' => [ 'href' => '/api/v1/user/posts', 'title' => 'Get user posts', 'type' => 'application/json' ],
           'comments' => [ 'href' => '/api/v1/user/comments', 'title' => 'Get user comments', 'type' => 'application/json' ],
           'todos' => [ 'href' => '/api/v1/user/todos', 'title' => 'Get user todos', 'type' => 'application/json' ],
       ];
       $data['_links'] = $links;
       return $data;
   }

    public static final function setUserHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/user/[id]', 'title' => 'Get user by id', 'type' => 'application/json' ],
            'posts' => [ 'href' => '/api/v1/user/posts', 'title' => 'Get user posts', 'type' => 'application/json' ],
            'comments' => [ 'href' => '/api/v1/user/comments', 'title' => 'Get user comments', 'type' => 'application/json' ],
            'todos' => [ 'href' => '/api/v1/user/todos', 'title' => 'Get user todos', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setUserPostsHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/user/[id]/posts', 'title' => 'Get user posts', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setUserCommentsHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/user/[id]/comments', 'title' => 'Get user comments', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setUserTodosHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/user/[id]/todos', 'title' => 'Get user todos', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setPostsHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/posts', 'title' => 'Get all posts', 'type' => 'application/json' ],
            'post' => [ 'href' => '/api/v1/post/[id]', 'title' => 'Get post by id', 'type' => 'application/json' ],
            'comments' => [ 'href' => '/api/v1/post/[id]/comments', 'title' => 'Get post comments by post id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setPostHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/post/[id]', 'title' => 'Get post by id', 'type' => 'application/json' ],
            'comments' => [ 'href' => '/api/v1/post/[id]/comments', 'title' => 'Get post comments by post id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setPostCommentsHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/post/[id]/comments', 'title' => 'Get post comments by post id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setCommentsHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/comments', 'title' => 'Get all comments', 'type' => 'application/json' ],
            'comment' => [ 'href' => '/api/v1/comment/[id]', 'title' => 'Get comment by id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static final function setCommentHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/comment/[id]', 'title' => 'Get comment by id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static function setTodosHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/todos', 'title' => 'Get all todos', 'type' => 'application/json' ],
            'todo' => [ 'href' => '/api/v1/todo/[id]', 'title' => 'Get todo by id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }

    public static function setTodoHateoas(array $data): array
    {
        $links = [
            'self' => [ 'href' => '/api/v1/todo/[id]', 'title' => 'Get todo by id', 'type' => 'application/json' ],
        ];
        $data['_links'] = $links;
        return $data;
    }
}
