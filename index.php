<?php
require_once 'Task.php';
require_once 'function.php';
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';

$pdo = Connection::make();


$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('tasks');


require 'index.view.php';