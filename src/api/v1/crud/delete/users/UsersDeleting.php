<?php

namespace Crud\delete\users;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class UsersDeleting extends REST
{
    public static final function deleteUser(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $user = Manager::table('users')->where('id', '=', $body_request)->get();
            Manager::table('users')->delete($body_request);

            http_response_code(STATUS_DATA_REMOVED);
            return [ 'ok' => true, 'status' => STATUS_DATA_REMOVED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $user ];
        } catch (Exception $error) {
            $log = new Logger('v1 delete user');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
