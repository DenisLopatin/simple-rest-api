<?php

namespace Crud\read\comments;
use Crud\REST;
use Illuminate\Database\Capsule\Manager;

final class CommentsReading extends REST
{
    public static final function getComments(): array
    {
        $response = Manager::table('comments')->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setCommentsHateoas($data);
    }

    public static final function getCommentByID(int $commentID): array
    {
        $response = Manager::table('comments')->where('id', '=', $commentID)->get();
        $data = [ 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
        return self::setCommentHateoas($data);
    }
}
