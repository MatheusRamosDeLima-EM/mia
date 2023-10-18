<?php
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
                $this->loadTemplate('error');
            } else {
                $this->loadTemplate('sections/doces/info', [$products, $param]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>