<?php

namespace Crud\create\todos;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class TodosCreating extends REST
{
    public static final function createTodo(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $todo_id = Manager::table('todos')->insertGetId($body_request);
            $todo = Manager::table('todos')->select()->where('id', '=', $todo_id)->get();

            http_response_code(STATUS_CREATED);
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $todo ];
        } catch (Exception $error) {
            $log = new Logger('v1 create todo');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
