<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

include_once('conection.php');

$query ="SELECT app_author,app_copyright FROM settings";

$result = $db->query($query);

$row = $result->fetch_assoc();


if ($row['app_author'] == 'jonathancastro' && $row['app_copyright'] == 'sistemaspymesjc') {


define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

}else{
    exit;
}

