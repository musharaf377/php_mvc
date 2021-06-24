<?php

namespace APP\Core;

class Router{
    public function test()
    {       
        echo "hello ";
    }

    protected $controller;

    protected  array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;

    }

    public function render_view($view, $params = [])
    {
        if(file_exists(ROOT_DIR ."/views/$view.php")){

            include_once ROOT_DIR ."/views/$view.php";
        }

    }

    public function run()
    {
        $path = $_SERVER['REQUEST_URI'];
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $callback = $this->routes[$method][$path];

        // print_r($callback);
        // die();

        if(is_string($callback)){
            $this->render_view($callback);
        }

        if(is_array($callback)){
            $this->Controller = new $callback[0]();
        }

        return call_user_func($callback);
    }
}