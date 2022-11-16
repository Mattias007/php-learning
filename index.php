<?php



class Task {


    public $description;
    public $is_compleeted = false;


    public function __construct($desc)
    {
        $this->description = $desc;
    }

    public function isComplete()
    {
        return $this->is_compleeted;
    }

    public function Complete()
    {
        $this->is_compleeted = true;
    }
}


$tasks =[
    new Task('Go to the store'),
    new Task('Go inside store'),
    new Task('Buy milk'),
    new Task('buy smoke')
];

$tasks[0]->Complete();


require 'index.view.php';