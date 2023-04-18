<?php

namespace Router;
use Illuminate\Database\Capsule\Manager;
use Crud\read\comments\Comments;
use Crud\read\posts\Posts;
use Crud\read\todos\Todos;
use Crud\read\users\Users;

final class Routing
{
    public function __construct(private readonly Manager $database) {}

    public final function bind(): void
    {
        Router::add('GET', '/v1/users', [new Users($this->database), 'getAllUsers']);
        Router::add('GET', '/v1/user/:id', [new Users($this->database), 'getUserByID']);
        Router::add('GET', '/v1/user/:id/posts', [new Users($this->database), 'getUserPostsByUserID']);
        Router::add('GET', '/v1/user/:id/comments', [new Users($this->database), 'getUserCommentsByUserID']);
        Router::add('GET', '/v1/user/:id/todos', [new Users($this->database), 'getUserTodosByUserID']);
        Router::add('GET', '/v1/posts', [new Posts($this->database), 'getAllPosts']);
        Router::add('GET', '/v1/post/:id', [new Posts($this->database), 'getPostByID']);
        Router::add('GET', '/v1/post/:id/comments', [new Posts($this->database), 'getPostCommentsByPostID']);
        Router::add('GET', '/v1/comments', [new Comments($this->database), 'getAllComments']);
        Router::add('GET', '/v1/comments/:id', [new Comments($this->database), 'getCommentByID']);
        Router::add('GET', '/v1/todos', [new Todos($this->database), 'getAllTodos']);
        Router::add('GET', '/v1/todo/:id', [new Todos($this->database), 'getTodoByID']);
        Router::add('GET', '.+', [new Users($this->database), 'get']);
    }
}
