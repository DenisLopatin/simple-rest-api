<?php

namespace Crud\delete\todos;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class TodosDeleting
{
    public static final function deleteTodo(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $todo = Manager::table('todos')->where('id', '=', $body_request)->get();
            Manager::table('todos')->delete($body_request);
            return [ 'ok' => true, 'status' => STATUS_DATA_REMOVED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $todo ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
