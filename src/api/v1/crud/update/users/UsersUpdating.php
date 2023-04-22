<?php

namespace Crud\update\users;
use Crud\REST;
use Exception;
use Illuminate\Database\Capsule\Manager;

final class UsersUpdating extends REST
{
    public static final function updateUser(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            $body_request['updated_at'] = date('Y-m-d H:i:s', time());
            Manager::table('users')->where('id', '=', $body_request)->update($body_request);
            $user = Manager::table('users')->where('id', '=', $body_request)->get();
            return [ 'ok' => true, 'status' => STATUS_OK, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $user ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
