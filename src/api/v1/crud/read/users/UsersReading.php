<?php

namespace Crud\read\users;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
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

            http_response_code(STATUS_OK);
            return self::setUsersHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('v1 get users');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserByID(int $userID): array
    {
        try {
            $response = Manager::table('users')->where('id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setUserHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get user by id');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserPostsByUserID(int $userID): array
    {
        try {
            $response = Manager::table('posts')->where('user_id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setUserPostsHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get user posts');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserCommentsByUserID(int $userID): array
    {
        try {
            $response = Manager::table('comments')->where('user_id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setUserCommentsHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get user comments');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getUserTodosByUserID(int $userID): array
    {
        try {
            $response = Manager::table('todos')->where('user_id', '=', $userID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];

            http_response_code(STATUS_OK);
            return self::setUserTodosHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get user todos');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
