<?php




function fetchallTask($pdo)
{
    $stmt = $pdo-> prepare('SELECT * FROM tasks');
    $stmt -> execute();

    return $tasks = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
}



function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}