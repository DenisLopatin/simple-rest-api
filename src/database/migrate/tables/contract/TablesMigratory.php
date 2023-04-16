<?php

namespace Database\migrate\tables\contract;
use Closure;

interface TablesMigratory
{
    public function createUsersTable(): Closure;
    public function createTodosTable(): Closure;
    public function createPostsTable(): Closure;
    public function createCommentsTable(): Closure;
}
