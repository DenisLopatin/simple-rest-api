<?php

namespace Crud\read\todos;
use Crud\CRUD;

final class TodosReading extends CRUD
{
    public final function getAllTodos(): array
    {
        $response = $this->database::table('todos')->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $this->recordRelatedRoutes($data, 'todos');
    }

    public final function getTodoByID(int $todoID): array
    {
        $response = $this->database::table('todos')->where('id', '=', $todoID)->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $this->recordRelatedRoutes($data, 'todos');
    }
}
