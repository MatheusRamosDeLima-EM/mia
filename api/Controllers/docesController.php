<?php
    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->setStyle('doces-index');
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
                // $this->setStyle('doces-index');
                // $this->loadTemplate('sections/doces/index', $products);
                call_user_func_array(array(new docesController, 'index'), []);
            } else if (!verifyProductInURIAndProducts($products, $param)) {
                // $this->setStyle('error');
                // $this->loadTemplate('error');
                call_user_func_array(array(new errorController, 'index'), []);
            } else {
                $this->setStyle('doces-info');
                $this->loadTemplate('sections/doces/info', ['products' => $products, 'productId' => $param[0]]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>