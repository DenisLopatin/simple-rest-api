<?php

namespace Crud\read\comments;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class CommentsReading extends REST
{
    public static final function getComments(): array
    {
        try {
            $response = Manager::table('comments')->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setCommentsHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('v1 get comments');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }

    public static final function getCommentByID(int $commentID): array
    {
        try {
            $response = Manager::table('comments')->where('id', '=', $commentID)->get();
            $data = [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $response ];
            return self::setCommentHateoas($data);
        } catch (Exception $error) {
            $log = new Logger('get comment by id');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            return [ 'ok' => false, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => [] ];
        }
    }
}
