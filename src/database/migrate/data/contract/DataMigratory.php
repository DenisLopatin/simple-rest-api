<?php

namespace Database\migrate\data\contract;

interface DataMigratory
{
    public function fillUsersTable(): array;
    public function fillTodosTable(): array;
    public function fillPostsTable(): array;
    public function fillCommentsTable(): array;
}
