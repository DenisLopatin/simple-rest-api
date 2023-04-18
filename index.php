<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Max-Age: 86400');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Request-Method: GET, POST, PUT, DELETE, OPTIONS');
//$request_body = json_decode(file_get_contents('php://input'), true);
use App\App;

require_once 'vendor/autoload.php';
require_once 'src/config/index.php';
require_once 'src/messages/messages.php';

$app = new App();
$app->init();
