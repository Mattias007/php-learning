<?php

class Connection
{
    public static function make($confgi)
    {

        try {
            return new PDO (
                "mysql:host={$confgi['host']};dbname={$confgi['db']};",
                $confgi['user'],
                $confgi['pass']
            );
        } catch (\PDOException $e) {
            return throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    
    }
}


