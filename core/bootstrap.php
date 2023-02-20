<?php
use App\Core\App;
use App\Core\Database\Connection;

ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

App::bind('config',require 'config.php');



App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
    
    
    
function view($name, $data = [])
{
    extract($data);
    return require_once("views/{$name}.view.php");
};




