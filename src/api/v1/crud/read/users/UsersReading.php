<?php

namespace Crud\read\users;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class UsersReading extends REST
{
    public static final function getUsers(): array
    {
        try {
            $response = Manager::table('users')->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setUsersHateoas($data);
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserByID(int $userID): array
    {
        try {
            $response = Manager::table('users')->where('id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setUserHateoas($data);
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserPostsByUserID(int $userID): array
    {
        try {
            $response = Manager::table('posts')->where('user_id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setUserPostsHateoas($data);
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserCommentsByUserID(int $userID): array
    {
        try {
            $response = Manager::table('comments')->where('user_id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setUserCommentsHateoas($data);
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserTodosByUserID(int $userID): array
    {
        try {
            $response = Manager::table('todos')->where('user_id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setUserTodosHateoas($data);
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
