<?php

namespace Crud\create\todos;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

class TodosCreating extends REST
{
    public static final function createTodo(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $todo_id = Manager::table('todos')->insertGetId($body_request);
            $todo = Manager::table('todos')->select()->where('id', '=', $todo_id)->get();
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $todo ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
