<?php

$query = require_once 'bootstrap.php';

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('tasks','');



require 'index.view.php';