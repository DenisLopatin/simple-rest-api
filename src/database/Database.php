<?php

namespace Database;
use Database\contract\RemoteStorage;
use Illuminate\Database\Capsule\Manager;

final class Database implements RemoteStorage
{
    public function __construct(
        private readonly string $driver,
        private readonly string $host,
        private readonly string $name,
        private readonly string $user,
        private readonly string $password,
        private readonly string $port,
        private readonly string $charset,
    ) {}

    public final function connect(Manager $databaseManager): Manager
    {
        $databaseManager->addConnection($this->getConnectionData());
        $databaseManager->bootEloquent();
        $databaseManager->setAsGlobal();

        return $databaseManager;
    }

    private function getConnectionData(): array
    {
        return [
            'driver' => $this->driver,
            'host' => $this->host,
            'database' => $this->name,
            'username' => $this->user,
            'password' => $this->password,
            'port' => $this->port,
            'charset' => $this->charset,
        ];
    }
}
