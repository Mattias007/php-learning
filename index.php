<?php

$db = require_once ('core/bootstrap.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');


require_once Router::load('routes.php')
    ->direct($uri);