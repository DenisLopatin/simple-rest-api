<?php

namespace Crud\update\todos;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class TodosUpdating extends REST
{
    public static final function updateTodo(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $body_request['updated_at'] = date('Y-m-d H:i:s', time());
            Manager::table('todos')->where('id', '=', $body_request)->update($body_request);
            $todo = Manager::table('todos')->where('id', '=', $body_request)->get();

            http_response_code(STATUS_OK);
            return [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $todo ];
        } catch (Exception $error) {
            $log = new Logger('v1 update todo');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
