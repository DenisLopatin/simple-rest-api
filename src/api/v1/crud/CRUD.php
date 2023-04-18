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

    protected final function setResponse(array $data, string $table): array
    {
        switch ($table) {
            case 'users':
                $data['related'] = [
                    'get all users' => '/v1/users',
                    'get user by id' => '/v1/user/[id]',
                    'get user by id with query' => '/v1/user?id=[id]',
                    'get users by id' => '/v1/users?id=[id,id...]',
                    'get user by name' => '/v1/users?name=[name]',
                    'get user by surname' => '/v1/users?surname=[surname]',
                    'get user by password' => '/v1/users?password=[password]',
                    'get user by email' => '/v1/users?email=[email]',
                ];
                return $data;
            case 'todos':
                $data['related'] = [
                    'get all todo' => '/v1/todos',
                    'get todo by id' => '/v1/todo/[id]',
                    'get todo by id with query' => '/v1/todo?id=[id]',
                    'get todos by id' => '/v1/todos?id=[id,id...]',
                    'get todo by user_id' => '/v1/todos?user_id=[user_id]',
                    'get todo by search' => '/v1/todos?todo=[todo]',
                    'combined' => '/v1/todos?id=[id]&user_id=[user_id]'
                ];
                return $data;
            default:
                return $data;
        }
    }
}
