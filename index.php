<?php

$db = require_once ('core/bootstrap.php');

$router = new Router;

require_once ('routes.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');

require_once ($router->direct($uri));