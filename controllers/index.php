<?php


$tasks = App::get('database')->selectAll('tasks');


require_once 'views/index.view.php';