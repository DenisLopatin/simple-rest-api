<?php

namespace Crud\update\comments;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class CommentsUpdating extends REST
{
    public static final function updateComment(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);;
            Manager::table('comments')->where('id', '=', $body_request)->update($body_request);
            $comment = Manager::table('comments')->where('id', '=', $body_request)->get();
            return [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $comment ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
