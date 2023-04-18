<?php

namespace Crud\read\comments;
use Crud\CRUD;

class Comments extends CRUD
{
    public final function getAllComments(): array
    {
        $response = $this->database::table('comments')->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }

    public final function getCommentByID(int $commentID): array
    {
        $response = $this->database::table('comments')->where('id', '=', $commentID)->get();
        $data = [ 'status' => 200, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $data;
    }
}
