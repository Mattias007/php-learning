<?php

ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

$app = [];


$app['config'] = require_once 'config.php';


require_once 'core/database/Request.php';
require_once 'core/database/Connection.php';
require_once 'core/database/QueryBuilder.php';
require_once 'core/Router.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database']));