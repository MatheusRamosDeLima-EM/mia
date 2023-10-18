<?php
    require realpath(dirname(__FILE__)."/../Core/Controller.php");

    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->loadTemplate('sections/doces/index', $products);
        }
        
        public function info($param = []) {
            require $this->productsPath();

            function verifyProductInURIAndProducts($products, $param) {
                foreach ($products as $productId => $product) {
                    if ($param[0] === $productId) return true;
                }
                return false;
            }

            if ($param === []) {
                $this->loadTemplate('sections/doces/index', $products);
            } else if (!verifyProductInURIAndProducts($products, $param)) {
                require_once "errorController.php";
                $error = new errorController;
                call_user_func_array(array($error, 'index'), []);
            } else {
                $this->loadTemplate('sections/doces/info', $products);
            }
        }

        private function productsPath() {
            return (realpath(dirname(__FILE__))."/../Models/products.php");
        }
    }
?>