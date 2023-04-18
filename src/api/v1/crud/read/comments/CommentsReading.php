<?php

namespace Crud\read\comments;
use Crud\CRUD;

class CommentsReading extends CRUD
{
    public final function getAllComments(): array
    {
        $response = $this->database::table('comments')->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $this->recordRelatedRoutes($data, 'comments');
    }

    public final function getCommentByID(int $commentID): array
    {
        $response = $this->database::table('comments')->where('id', '=', $commentID)->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return $this->recordRelatedRoutes($data, 'comments');
    }
}
