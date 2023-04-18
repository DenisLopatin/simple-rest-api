<?php

namespace Router;
use Crud\read\users\Users;
use Illuminate\Database\Capsule\Manager;

class Routing
{
    public function __construct(private readonly Manager $database) {}

    public function bind(): void
    {
        Router::add('GET', '/v1/users', [new Users($this->database), 'getAllUsers']);
        Router::add('GET', '/v1/user/:id', [new Users($this->database), 'getUserByID']);
        Router::add('GET', '/v1/user/:id/posts', [new Users($this->database), 'getUserPostsByUserID']);
        Router::add('GET', '/v1/user/:id/comments', [new Users($this->database), 'getUserCommentsByUserID']);
        Router::add('GET', '/v1/user/:id/todos', [new Users($this->database), 'getUserTodosByUserID']);

        Router::add('GET', '/v1/users', [new Users($this->database), 'getAllUsers']);

        Router::add('GET', '.+', [new Users($this->database), 'get']);
    }
}
