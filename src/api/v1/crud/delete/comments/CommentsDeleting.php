<?php

namespace Crud\delete\comments;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class CommentsDeleting extends REST
{
    public static final function deleteComment(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $comment = Manager::table('comments')->where('id', '=', $body_request)->get();
            Manager::table('comments')->delete($body_request);

            http_response_code(STATUS_DATA_REMOVED);
            return [ 'ok' => true, 'status' => STATUS_DATA_REMOVED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $comment ];
        } catch (Exception $error) {
            $log = new Logger('v1 delete comment');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);

            http_response_code(STATUS_BAD_REQUEST);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
