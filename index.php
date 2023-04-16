<?php

use Database\Database;
use Database\migrate\Migrate;
use Database\migrate\data\MigrateData;
use Database\migrate\tables\MigrateTables;
use Illuminate\Database\Capsule\Manager;

require_once 'vendor/autoload.php';
require_once 'src/config/index.php';

$database = new Database(DB_DRIVER, DB_HOST, DB_NAME, DB_USER, DB_PASSWORD, DB_PORT, DB_CHARSET);
$database_manager = $database->connect(new Manager());
$migrate = new Migrate($database_manager, new MigrateTables(), new MigrateData());
$migrate->migrate();
