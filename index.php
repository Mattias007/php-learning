<?php

$query = require_once 'bootstrap.php';


$tasks = $query->selectAll('tasks');



require 'index.view.php';