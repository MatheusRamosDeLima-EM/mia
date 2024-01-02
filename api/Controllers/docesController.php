<?php
    class docesController extends Controller {
        public function index() {
            require_once $this->productsPath();

            $this->setTitle('Todos os doces - MIA');
            $this->setStyle('doces/index');
            $this->loadTemplate('doces/index', $products);
        }
        
        public function info($param = []) {
            require_once $this->productsPath();

            function verifyProductInURIAndProducts($products, $productParam) {
                foreach ($products as $productId => $product) {
                    if ($productParam === $productId) return true;
                }
                return false;
            }

            if (count($param) != 1 || !verifyProductInURIAndProducts($products, $param[0])) {
                call_user_func_array(array(new errorController, 'index'), []);
            } else {
                $productParam = $param[0];
                $this->setTitle($products[$productParam]->__get('name') . ' - MIA');
                $this->setStyle('doces/info');
                $this->setScript('doces/info');
                $this->loadTemplate('doces/info', ['products' => $products, 'productId' => $productParam]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>