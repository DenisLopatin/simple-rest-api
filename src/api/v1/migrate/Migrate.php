<?php

namespace MigrateV1;
use MigrateV1\contract\Migratory;
use MigrateV1\data\contract\DataMigratory;
use MigrateV1\tables\contract\TablesMigratory;
use Illuminate\Database\Capsule\Manager;
use Exception;

final class Migrate implements Migratory
{
    public function __construct(private readonly TablesMigratory $tables, private readonly DataMigratory $data) {}

    public final function migrate(): void
    {
        try {
            if (!Manager::schema()->hasTable('users')) {
                Manager::schema()->create('users', $this->tables->createUsersTable());
                Manager::table('users')->insert($this->data->fillUsersTable());
            }

            if (!Manager::schema()->hasTable('todos')) {
                Manager::schema()->create('todos', $this->tables->createTodosTable());
                Manager::table('todos')->insert($this->data->fillTodosTable());
            }

            if (!Manager::schema()->hasTable('posts')) {
                Manager::schema()->create('posts', $this->tables->createPostsTable());
                Manager::table('posts')->insert($this->data->fillPostsTable());
            }

            if (!Manager::schema()->hasTable('comments')) {
                Manager::schema()->create('comments', $this->tables->createCommentsTable());
                Manager::table('comments')->insert($this->data->fillCommentsTable());
            }
        } catch (Exception $error) {
            exit('Database initialization error: ' . $error->getMessage());
        }
    }
}
