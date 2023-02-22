<?php 

namespace App\Controllers;
use App\Core\App;


class BlogiController{
    public function index(){
                $blogi = App::get('database')->selectAll('blogi');
        return view('blogi', ['blogi'=> $blogi]);
    }

    public function store(){

        App::get('database')->insert('blogi',[
            'text' => $_POST['postitus']
        ]);

        header('Location: /blogi');
    }

    public function delete(){
        $id=$_POST['id'];

        App::get('database')->delete('blogi',"id = $id");


        header('Location: /blogi');

    }

    public function update(){
        $id=$_POST['id'];
        $textupdate=$_POST['textupdate'];
        App::get('database')->update('blogi','text', "$textupdate" ,"id = $id",);


        header('Location: /blogi');

    }
}