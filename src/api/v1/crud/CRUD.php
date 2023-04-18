<?php

namespace Crud;
use Illuminate\Database\Capsule\Manager;

abstract class CRUD
{
    public function __construct(protected readonly Manager $database) {}

    public final function get(): array
    {
        return [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
    }

    protected final function recordRelatedRoutes(array $data, string $table): array
    {
        switch ($table) {
            case 'users':
                $data['related'] = [
                    'get all users' => '/v1/users',
                    'get user by id' => '/v1/user/:id',
                    'get user\'s posts' => '/v1/user/:id/posts',
                    'get user\'s comments' => '/v1/user/:id/comments',
                    'get user\'s todos' => '/v1/user/:id/todos',
                ];
                return $data;
            case 'posts':
                $data['related'] = [
                    'get all posts' => '/v1/posts',
                    'get post by id' => '/v1/post/:id',
                    'get comments of post' => '/v1/post/:id/comments',
                ];
                return $data;
            case 'comments':
                $data['related'] = [
                    'get all comments' => '/v1/comments',
                    'get comment by id' => '/v1/comment/:id',
                ];
                return $data;
            case 'todos':
                $data['related'] = [
                    'get all todo' => '/v1/todos',
                    'get todo by id' => '/v1/todo/:id',
                ];
                return $data;
            default:
                return $data;
        }
    }
}
