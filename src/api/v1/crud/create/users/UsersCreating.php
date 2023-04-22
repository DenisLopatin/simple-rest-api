<?php

namespace Crud\create\users;
use Illuminate\Database\Capsule\Manager;
use Crud\REST;
use Exception;

final class UsersCreating extends REST
{
    public static final function createUser(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $user_id = Manager::table('users')->insertGetId($body_request);
            $user = Manager::table('users')->where('id', '=', $user_id)->get();
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $user ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
