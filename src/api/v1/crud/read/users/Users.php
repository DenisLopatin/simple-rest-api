<?php

namespace Crud\read\users;
use Crud\CRUD;

class Users extends CRUD
{
    public final function getAllUsers(): array
    {
        $response = $this->database::table('users')->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getUserByID(int $userID): array
    {
        $response = $this->database::table('users')->where('id', '=', $userID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getUserPostsByUserID(int $userID): array
    {
        $response = $this->database::table('posts')->where('user_id', '=', $userID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getUserCommentsByUserID(int $userID): array
    {
        $response = $this->database::table('comments')->where('user_id', '=', $userID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getUserTodosByUserID(int $userID): array
    {
        $response = $this->database::table('todos')->where('user_id', '=', $userID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }
}
