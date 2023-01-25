<?php

class Connection
{
    public static function make($config)
    {

        try {
            return new PDO (
                "mysql:host={$config['host']};dbname={$config['db']};",
                $config['user'],
                $config['pass']
            );
        } catch (\PDOException $e) {
            return throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    
    }
}


