<?php

namespace App\Controllers;
use App\Core\App;


class PagesController {
    public function home () {
        


        return view('index');
    }

    
    public function about () {
        
        return view('about',['title' => 'About me']);
    }


    public function culture () {
        
        
        return view('culture');
    }


    public function aboutculture () {
        
        
        return view('aboutCulture');
    }


    public function contact () {
        
        
        $contacts = App::get('database')->selectAll('contacts');



        return view('contact', ['contacts'=>$contacts]);
    }



}