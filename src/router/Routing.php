<?php

namespace Router;
use Crud\read\users\UsersReading;
use Illuminate\Database\Capsule\Manager;
use Crud\read\comments\CommentsReading;
use Crud\read\posts\PostsReading;
use Crud\read\todos\TodosReading;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

final class Routing
{
    public function __construct(private readonly Manager $database) {}

    public final function bind(): void
    {
        Router::add('GET', '/v1/users', [new UsersReading($this->database), 'getAllUsers']);
        Router::add('GET', '/v1/user/:id', [new UsersReading($this->database), 'getUserByID']);
        Router::add('GET', '/v1/user/:id/posts', [new UsersReading($this->database), 'getUserPostsByUserID']);
        Router::add('GET', '/v1/user/:id/comments', [new UsersReading($this->database), 'getUserCommentsByUserID']);
        Router::add('GET', '/v1/user/:id/todos', [new UsersReading($this->database), 'getUserTodosByUserID']);
        Router::add('GET', '/v1/posts', [new PostsReading($this->database), 'getAllPosts']);
        Router::add('GET', '/v1/post/:id', [new PostsReading($this->database), 'getPostByID']);
        Router::add('GET', '/v1/post/:id/comments', [new PostsReading($this->database), 'getPostCommentsByPostID']);
        Router::add('GET', '/v1/comments', [new CommentsReading($this->database), 'getAllComments']);
        Router::add('GET', '/v1/comments/:id', [new CommentsReading($this->database), 'getCommentByID']);
        Router::add('GET', '/v1/todos', [new TodosReading($this->database), 'getAllTodos']);
        Router::add('GET', '/v1/todo/:id', [new TodosReading($this->database), 'getTodoByID']);
    }
}
