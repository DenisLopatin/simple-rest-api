<?php

namespace Crud\read\todos;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class TodosReading extends REST
{
    public static final function getTodos(): array
    {
        try {
            $response = Manager::table('todos')->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setTodosHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('v1 get todos');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getTodoByID(int $todoID): array
    {
        try {
            $response = Manager::table('todos')->where('id', '=', $todoID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setTodoHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get todo by id');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
