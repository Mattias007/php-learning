<?php 

namespace App\Controllers;
use App\Core\App;


class BlogiController{
    public function index(){

        return view('blogi');
    }

    public function store(){

        App::get('database')->insert('blogi',[
            'blogi' => $_POST['blogi']
        ]);
        
        header('Location: /blogi');
    }
}