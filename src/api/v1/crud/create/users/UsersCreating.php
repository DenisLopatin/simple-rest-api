<?php

namespace Crud\create\users;
use Crud\REST;

class UsersCreating extends REST
{
    public final function createUser()
    {
        $bodyRequest = json_decode(file_get_contents('php://input'), true);
        return $bodyRequest;
    }
}
