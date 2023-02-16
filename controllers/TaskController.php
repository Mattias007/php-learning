<?php

class TaskController {

    public function index() {
        $tasks = App::get('database')->selectAll('tasks');

        return view('tasks', ['tasks'=> $tasks]);
    }

    public function addtask() {
        App::get('database')->insert('tasks',[
            'description' => $_POST['descrption']
        ]);
        
        header('Location: /tasks');
    }

}