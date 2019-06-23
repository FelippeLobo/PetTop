<?php

class Router{


    public $routes = [

        'GET' => [ ],
        'POST' => [ ]
    ];

    public function get($url,$controller){

        $this->routes['GET'][$url] = $controller;
    }

    public function post($url,$controller){

        $this->routes['POST'][$url] = $controller;
    }

    public function direct($url,$method){

        if(array_key_exists($url,$this->routes[$method])){
            return $this->routes[$method][$url];
        }

        throw new Exception('No route defined for this URL');
    }


    public static function load($file)
    {
        $routes = new static;

        require $file;

        return $routes;
    } 
}