<?php

class QueryBuilder{
    
    protected $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($tabel)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$tabel};");

        $stmt -> execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}