<?php
class Router {
    
    protected $routes = [
        'GET'=>[],
        'POST'=>[],
    ];


    public function get($uri,$conrtroller) {

        $this->routes['GET'][$uri] = $conrtroller;

    }

    public function post($uri,$conrtroller) {

        $this->routes['POST'][$uri] = $conrtroller;

    }
    

    public static function load($file) {

        $router = new static;

        require $file;

        return $router;
    }

    public function direct($uri,$requestType) {
        
       if (array_key_exists($uri, $this->routes[$requestType])) 
       {
            return $this->callAction(
                ...explode('@',$this->routes[$requestType][$uri])
            );
       }

       throw new Exception('No route defined for this URl');
    }


    protected function callAction($conrtroller, $action){
        $conrtroller = new $conrtroller;
        if (!method_exists($conrtroller, $action)) {
            throw new Exception(
                "{$conrtroller} does not respond to the {$action}"
            );
        }

        $conrtroller->$action();
    }


};