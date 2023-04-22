<?php

namespace Crud\create\users;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Illuminate\Database\Capsule\Manager;
use Crud\REST;
use Exception;

final class UsersCreating extends REST
{
    public static final function createUser(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $user_id = Manager::table('users')->insertGetId($body_request);
            $user = Manager::table('users')->where('id', '=', $user_id)->get();

            http_response_code(STATUS_CREATED);
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $user ];
        } catch (Exception $error) {
            $log = new Logger('v1 create user');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
