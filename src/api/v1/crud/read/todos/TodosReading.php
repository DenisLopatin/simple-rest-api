<?php

namespace Crud\read\todos;
use Crud\REST;
use Illuminate\Database\Capsule\Manager;

final class TodosReading extends REST
{
    public static final function getTodos(): array
    {
        $response = Manager::table('todos')->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setTodosHateoas($data);
    }

    public static final function getTodoByID(int $todoID): array
    {
        $response = Manager::table('todos')->where('id', '=', $todoID)->get();
        $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setTodoHateoas($data);
    }
}
