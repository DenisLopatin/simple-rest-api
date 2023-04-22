<?php

namespace Crud\read\users;
use Crud\REST;
use Illuminate\Database\Capsule\Manager as DatabaseManager;

final class UsersReading extends REST
{
    public static final function getUsers(): array
    {
        $response = DatabaseManager::table('users')->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setUsersHateoas($data);
    }

    public static final function getUserByID(int $userID): array
    {
        $response = DatabaseManager::table('users')->where('id', '=', $userID)->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setUserHateoas($data);
    }

    public static final function getUserPostsByUserID(int $userID): array
    {
        $response = DatabaseManager::table('posts')->where('user_id', '=', $userID)->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setUserPostsHateoas($data);
    }

    public static final function getUserCommentsByUserID(int $userID): array
    {
        $response = DatabaseManager::table('comments')->where('user_id', '=', $userID)->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setUserCommentsHateoas($data);
    }

    public static final function getUserTodosByUserID(int $userID): array
    {
        $response = DatabaseManager::table('todos')->where('user_id', '=', $userID)->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setUserTodosHateoas($data);
    }
}
