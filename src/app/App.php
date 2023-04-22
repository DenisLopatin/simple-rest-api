<?php

namespace App;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Illuminate\Database\Capsule\Manager;
use Database\Database;
use MigrateV1\Migrate;
use MigrateV1\data\MigrateData;
use MigrateV1\tables\MigrateTables;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Processing\RequestHandler;
use Router\Routing;
use Exception;

final class App
{
    public static final function init(): void
    {
        try {
            $database_config = [DB_DRIVER, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_PORT, DB_CHARSET];
            (new Database(...$database_config))->connect(new Manager());
            $migrateApiV1 = new Migrate(new MigrateTables(), new MigrateData());
            $routing = new Routing();
            $requestHandler = new RequestHandler(new FilesystemAdapter(CACHE_FOLDER, CACHE_TIME, CACHE_DIRECTORY));

            $migrateApiV1->migrate();
            $routing->bind();
            $requestHandler->processRequest();
        } catch (Exception $error) {
            $log = new Logger('initialize app');
            $log->pushHandler(new StreamHandler(LOG_FOLDER, Level::Warning));
            $log->error($error);
            exit('Application initialization error');
        }
    }
}
