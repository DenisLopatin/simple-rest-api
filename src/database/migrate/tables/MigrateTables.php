<?php

namespace Database\migrate\tables;
use Database\migrate\tables\contract\TablesMigratory;
use Closure;

final class MigrateTables implements TablesMigratory
{
    public final function createUsersTable(): Closure
    {
        return function ($users) {
            $users->increments('id')->unsigned();
            $users->string('name');
            $users->string('surname');
            $users->string('password');
            $users->string('email')->unique();
            $users->timestamp('created_at')->useCurrent();
            $users->timestamp('updated_at')->useCurrent();;
        };
    }

    public final function createTodosTable(): Closure
    {
        return function ($todos) {
            $todos->increments('id')->unsigned();
            $todos->integer('user_id')->unsigned();
            $todos->string('todo');
            $todos->timestamp('created_at')->useCurrent();
            $todos->timestamp('updated_at')->useCurrent();;
            $todos->foreign('user_id')->references('id')->on('users');
        };
    }

    public final function createPostsTable(): Closure
    {
        return function ($posts) {
            $posts->increments('id')->unsigned();
            $posts->integer('user_id')->unsigned();
            $posts->string('heading');
            $posts->text('article');
            $posts->timestamp('created_at')->useCurrent();
            $posts->timestamp('updated_at')->useCurrent();;
            $posts->foreign('user_id')->references('id')->on('users');
        };
    }

    public final function createCommentsTable(): Closure
    {
        return function ($comments) {
            $comments->increments('id')->unsigned();
            $comments->integer('user_id')->unsigned();
            $comments->integer('post_id')->unsigned();
            $comments->string('comment');
            $comments->timestamp('created_at')->useCurrent();
            $comments->timestamp('updated_at')->useCurrent();;
            $comments->foreign('user_id')->references('id')->on('users');
            $comments->foreign('post_id')->references('id')->on('posts');
        };
    }
}
