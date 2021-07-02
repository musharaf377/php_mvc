<?php

namespace App\Core;

class Route{
    // public function test()
    // {
    //     echo "hello bangladesh.";
    // }

    protected array $route = [];
    public function get($path, $callback)
    {
        $this->route['get'][$path] = [$callback];

        // echo "<pre>";
        // var_dump($this->route);
        // echo "</pre>";
    
    }

    public function render_view($views, $params = [])
    {
        if(file_exists('ROOT_DIR'. "/views/$views.php")){
            include 'ROOT_DIR' . "/views/$views.php";
        }
    }

    public function run()
    {
        $path = $_SERVER['REQUEST_URI'];

        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $callback = $this->route[$method][$path];

        // print_r($callback);
        // die();

        if(is_string($callback)){
            return $this->render_view($callback);
        }

        if(is_array($callback)){
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback);
    }  

}