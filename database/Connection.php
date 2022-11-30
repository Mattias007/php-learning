<?php

class Connection
{
    public static function make()
    {

        $host='127.0.0.1';
        $db='mytodo';
        $user='root';
        $pass='';
        $charset='utf8mb4';
    
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        try {
            return $pdo = new PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            return throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    
    }
}


