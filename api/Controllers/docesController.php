<?php
    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->setStyle('doces-index');
            $this->loadTemplate('sections/doces/index', $products);
        }
        
        public function info($data = []) {
            require $this->productsPath();

            function verifyProductInURIAndProducts($products, $data) {
                $productId = $data[0];
                foreach ($products as $productId => $product) {
                    if ($productId === $productId) return true;
                }
                return false;
            }

            if ($data === []) {
                call_user_func_array(array(new docesController, 'index'), []);
            } else if (!verifyProductInURIAndProducts($products, $data)) {
                call_user_func_array(array(new errorController, 'index'), []);
            } else {
                $this->setStyle('doces-info');
                $this->loadTemplate('sections/doces/info', ['products' => $products, 'productId' => $productId]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>