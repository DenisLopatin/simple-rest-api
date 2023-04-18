<?php

namespace Database\migrate;
use Database\migrate\contract\Migratory;
use Database\migrate\data\contract\DataMigratory;
use Database\migrate\tables\contract\TablesMigratory;
use Illuminate\Database\Capsule\Manager;
use Exception;

final class Migrate implements Migratory
{
    public function __construct(
        private readonly Manager $databaseManager,
        private readonly TablesMigratory $tables,
        private readonly DataMigratory $data,
    ) {}

    public final function migrate(): void
    {
        try {
            if (!$this->hasTable('users')) {
                $this->databaseManager::schema()->create('users', $this->tables->createUsersTable());
                $this->databaseManager::table('users')->insert($this->data->fillUsersTable());
            }

            if (!$this->hasTable('todos')) {
                $this->databaseManager::schema()->create('todos', $this->tables->createTodosTable());
                $this->databaseManager::table('todos')->insert($this->data->fillTodosTable());
            }

            if (!$this->hasTable('posts')) {
                $this->databaseManager::schema()->create('posts', $this->tables->createPostsTable());
                $this->databaseManager::table('posts')->insert($this->data->fillPostsTable());
            }

            if (!$this->hasTable('comments')) {
                $this->databaseManager::schema()->create('comments', $this->tables->createCommentsTable());
                $this->databaseManager::table('comments')->insert($this->data->fillCommentsTable());
            }
        } catch (Exception $error) {
            exit('Database initialization error: ' . $error->getMessage());
        }
    }

    private function hasTable(string $table): bool
    {
        return $this->databaseManager::schema()->hasTable($table);
    }
}
