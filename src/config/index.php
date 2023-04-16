<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

require_once 'db.config.php';
