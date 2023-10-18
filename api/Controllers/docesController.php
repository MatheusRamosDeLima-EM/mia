<?php
    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->loadTemplate('sections/doces/index', $products);
        }
        
        public function info(string $uriProduct) {
            require $this->productsPath();

            function verifyProductInURIAndProducts($products, $uriProduct) {
                foreach ($products as $productId => $product) {
                    if ($uriProduct[0] === $productId) return true;
                }
                return false;
            }

            if ($uriProduct === []) {
                $doces = new docesController;
                call_user_func_array(array($doces, 'index'), []);
            } else if (!verifyProductInURIAndProducts($products, $uriProduct)) {
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