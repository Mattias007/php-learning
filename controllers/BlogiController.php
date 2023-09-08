<?php 

namespace App\Controllers;
use App\Core\App;
use PDO;

class BlogiController{
    public function index(){
                $blogi = App::get('database')->selectAll('blogi');
        return view('blogi', ['blogi'=> $blogi]);
    }

    public function store(){

        App::get('database')->insert('blogi',['text' => $_POST['postitus']]);
 
        header('Location: /blogi');
    }

    public function delete(){

        App::get('database')->delete('blogi',['id' =>$_POST['id']]);

        header('Location: /blogi');

    }

    public function update(){
        $id = $_POST['id'];
        $textupdate = $_POST['textupdate'];
        App::get('database')->update('blogi','text', "$textupdate" ,"id = $id",);

        App::get('database')->update('blogi','modifyed', "1" ,"id = $id",);


        header('Location: /blogi');

    }
}


