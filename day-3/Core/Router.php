<?php

    namespace APP\Core;

    class Router{

        protected array $routes = [];

        public function get($path,$callback)
        {
            $this->routes['get'][$path] = $callback;

        }

        public function render_view($view)
        {
            if(file_exists(ROOT_DIR . "views/$view.php")){
                include_once ROOT_DIR . "views/$view.php";
            }
        }

        public function run()
        {
           $path  = $_SERVER['REQUEST_URI'];
           $method = strtolower ($_SERVER['REQUEST_METHOD']);

           $callback = $this->routes[$method][$path];

           if(is_string($callback)){
               $this->render_view($callback);
           }
        }
    }


?>