<?php
require_once 'Task.php';
require_once 'function.php';
require_once 'database/Connection.php';


$pdo = Connection::make();
$tasks = fetchallTask($pdo);




require 'index.view.php';