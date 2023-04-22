<?php

namespace Crud\create\users;
use Illuminate\Database\Capsule\Manager;
use Crud\REST;
use Exception;

class UsersCreating extends REST
{
    public static final function createUser(): array
    {
        try {
            $body_request = json_decode(file_get_contents('php://input'), true);
            Manager::table('users')->insert($body_request);
            return [ 'ok' => true, 'status' => STATUS_CREATED, 'message' => REQUEST_HAS_BEEN_FULFILLED, 'data' => $body_request ];
        } catch (Exception $error) {
            return [ 'ok' => false, 'status' => STATUS_BAD_REQUEST, 'message' => REQUEST_HAS_BEEN_FAILED, 'data' => [] ];
        }
    }
}
