<?php
    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->defineStylesheet('doces-index');
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
                $this->defineStylesheet('doces-index');
                $this->loadTemplate('sections/doces/index', $products);
            } else if (!verifyProductInURIAndProducts($products, $param)) {
                $this->defineStylesheet('error');
                $this->loadTemplate('error');
            } else {
                $this->defineStylesheet('doces-info');
                $this->loadTemplate('sections/doces/info', [$products, $param[0]]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>