<?php
App::get('database')->insert('tasks',[
    'description' => $_POST['descrption']
]);

header('Location: /');
