<?php

namespace Crud\read\todos;
use Crud\CRUD;

final class Todos extends CRUD
{
    public final function getAllTodos(): array
    {
        $response = $this->database::table('todos')->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getTodoByID(int $todoID): array
    {
        $response = $this->database::table('todos')->where('id', '=', $todoID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }
}
