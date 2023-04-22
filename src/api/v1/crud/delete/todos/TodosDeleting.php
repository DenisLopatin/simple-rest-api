<?php

namespace Crud\delete\todos;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class TodosDeleting extends REST
{
    public static final function deleteTodo(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $todo = Manager::table('todos')->where('id', '=', $body_request)->get();
            Manager::table('todos')->delete($body_request);
            return [ 'ok' => true, 'status' => STATUS_DATA_REMOVED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $todo ];
        } catch (Exception $error) {
            $log = new Logger('delete todo');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
