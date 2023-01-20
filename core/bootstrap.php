<?php

ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

$config = require_once 'config.php';


require_once 'core/database/Request.php';
require_once 'core/database/Connection.php';
require_once 'core/database/QueryBuilder.php';
require_once ('core/Router.php');

return new QueryBuilder(
    Connection::make($config['database']));