<?php


$tasks = $db->selectAll('tasks');


require_once 'views/index.view.php';