<?php

namespace App;
use Database\Database;
use Database\migrate\Migrate;
use Database\migrate\data\MigrateData;
use Database\migrate\tables\MigrateTables;
use Illuminate\Database\Capsule\Manager;
use Processing\RequestHandler;
use Router\Routing;
use Exception;

final class App
{
    public final function init(): void
    {
        try {
            $database_config = [DB_DRIVER, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_PORT, DB_CHARSET];
            $database = (new Database(...$database_config))->connect(new Manager());
            $migrate = new Migrate($database, new MigrateTables(), new MigrateData());
            $routing = new Routing($database);
            $requestHandler = new RequestHandler();

            $migrate->migrate();
            $routing->bind();
            $requestHandler->processRequest();
        } catch (Exception $error) {
            exit('Application initialization error: ' . $error->getMessage());
        }
    }
}
