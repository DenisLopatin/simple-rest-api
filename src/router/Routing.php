<?php

namespace Router;
use Crud\create\comments\CommentsCreating;
use Crud\read\comments\CommentsReading;
use Crud\update\comments\CommentsUpdating;
use Crud\delete\comments\CommentsDeleting;
use Crud\create\users\UsersCreating;
use Crud\read\users\UsersReading;
use Crud\update\users\UsersUpdating;
use Crud\delete\users\UsersDeleting;
use Crud\create\todos\TodosCreating;
use Crud\read\todos\TodosReading;
use Crud\update\todos\TodosUpdating;
use Crud\delete\todos\TodosDeleting;
use Crud\create\posts\PostsCreating;
use Crud\read\posts\PostsReading;
use Crud\update\posts\PostsUpdating;
use Crud\delete\posts\PostsDeleting;

final class Routing
{
    public function __construct() {}

    public final function bind(): void
    {
        Router::add('GET', '/api/v1/users', [UsersReading::class, 'getUsers']);
        Router::add('GET', '/api/v1/user/:id', [UsersReading::class, 'getUserByID']);
        Router::add('GET', '/api/v1/user/:id/posts', [UsersReading::class, 'getUserPostsByUserID']);
        Router::add('GET', '/api/v1/user/:id/comments', [UsersReading::class, 'getUserCommentsByUserID']);
        Router::add('GET', '/api/v1/user/:id/todos', [UsersReading::class, 'getUserTodosByUserID']);
        Router::add('GET', '/api/v1/posts', [PostsReading::class, 'getPosts']);
        Router::add('GET', '/api/v1/post/:id', [PostsReading::class, 'getPostByID']);
        Router::add('GET', '/api/v1/post/:id/comments', [PostsReading::class, 'getPostCommentsByPostID']);
        Router::add('GET', '/api/v1/comments', [CommentsReading::class, 'getComments']);
        Router::add('GET', '/api/v1/comment/:id', [CommentsReading::class, 'getCommentByID']);
        Router::add('GET', '/api/v1/todos', [TodosReading::class, 'getTodos']);
        Router::add('GET', '/api/v1/todo/:id', [TodosReading::class, 'getTodoByID']);

        Router::add('POST', '/api/v1/user', [UsersCreating::class, 'createUser']);
        Router::add('POST', '/api/v1/post', [PostsCreating::class, 'createPost']);
        Router::add('POST', '/api/v1/comment', [CommentsCreating::class, 'createComment']);
        Router::add('POST', '/api/v1/todo', [TodosCreating::class, 'createTodo']);

        Router::add('DELETE', '/api/v1/user', [UsersDeleting::class, 'deleteUser']);
        Router::add('DELETE', '/api/v1/post', [PostsDeleting::class, 'deletePost']);
        Router::add('DELETE', '/api/v1/comment', [CommentsDeleting::class, 'deleteComment']);
        Router::add('DELETE', '/api/v1/todo', [TodosDeleting::class, 'deleteTodo']);

        Router::add('PUT', '/api/v1/user', [UsersUpdating::class, 'updateUser']);
        Router::add('PUT', '/api/v1/post', [PostsUpdating::class, 'updatePost']);
        Router::add('PUT', '/api/v1/comment', [CommentsUpdating::class, 'updateComment']);
        Router::add('PUT', '/api/v1/todo', [TodosUpdating::class, 'updateTodo']);
    }
}
