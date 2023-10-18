<?php 
    class Core {
        public function __construct() {
            $this->run();
        }

        public function run() {
            $uri = trim($_SERVER['REQUEST_URI'], '/');

            if ($uri === 'index.php') $uri = '';
            else if (strpos($uri, 'index.php/') === 0) $uri = substr($uri, strlen('index.php/'));

            if (!empty($uri)) {
                $uri = explode('/', $uri);

                $controller = $uri[0].'Controller';

                array_shift($uri);

                if (isset($uri[0]) && !empty($uri[0])) {
                    $method = $uri[0];

                    array_shift($uri);

                    if (count($uri) > 0) $paramethers = $uri;
                    else $paramethers = [];
                } else {
                    $method = 'index';
                    $paramethers = [];
                }
            } else {
                $controller = 'homeController';
                $method = 'index';
                $paramethers = [];
            }

            require realpath(dirname(__FILE__)."/../Controllers/$controller.php");

            $pathController = realpath(dirname(__FILE__)."/../Controllers/$controller.php");

            if (!file_exists($pathController) || !method_exists($controller, $method)) {
                $controller = 'errorController';
                $method = 'index';
                $paramethers = [];
            }

            $c = new $controller;
            call_user_func_array(array($c, $method), array($paramethers));
        }
    }
?>