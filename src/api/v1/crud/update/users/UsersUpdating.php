<?php

namespace Crud\update\users;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class UsersUpdating extends REST
{
    public static final function updateUser(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $body_request['updated_at'] = date('Y-m-d H:i:s', time());
            Manager::table('users')->where('id', '=', $body_request)->update($body_request);
            $user = Manager::table('users')->where('id', '=', $body_request)->get();

            http_response_code(STATUS_OK);
            return [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $user ];
        } catch (Exception $error) {
            $log = new Logger('v1 update user');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
