<?php

namespace App;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Database\Database;
use Database\migrate\Migrate;
use Database\migrate\data\MigrateData;
use Database\migrate\tables\MigrateTables;
use Illuminate\Database\Capsule\Manager;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
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
            $migrate = new Migrate(new MigrateTables(), new MigrateData());
            $routing = new Routing();
            $requestHandler = new RequestHandler(new FilesystemAdapter(CACHE_FOLDER, CACHE_TIME, CACHE_DIRECTORY));

            $migrate->migrate();
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
