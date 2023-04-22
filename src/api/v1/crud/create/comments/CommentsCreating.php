<?php

namespace Crud\create\comments;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Illuminate\Database\Capsule\Manager;
use Crud\REST;
use Exception;

final class CommentsCreating extends REST
{
    public static final function createComment(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $comment_id = Manager::table('comments')->insertGetId($body_request);
            $comment = Manager::table('comments')->select()->where('id', '=', $comment_id)->get();
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $comment ];
        } catch (Exception $error) {
            $log = new Logger('create comment');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
