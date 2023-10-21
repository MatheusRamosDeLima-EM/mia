<?php
    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->__set('style', 'doces-index');
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
                $this->__set('style', 'doces-index');
                $this->loadTemplate('sections/doces/index', $products);
            } else if (!verifyProductInURIAndProducts($products, $param)) {
                $this->__set('style', 'error');
                $this->loadTemplate('error');
            } else {
                $this->__set('style', 'doces-info');
                $this->loadTemplate('sections/doces/info', ['products' => $products, 'productId' => $param[0]]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>