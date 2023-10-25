<?php
    class docesController extends Controller {
        public function index() {
            require $this->productsPath();

            $this->setTitle('Todos os doces - MIA');
            $this->setStyle('doces-index');
            $this->loadTemplate('sections/doces/index', $products);
        }
        
        public function info($data = []) {
            require $this->productsPath();

            $productName = $data[0];
            function verifyProductInURIAndProducts($products, $productName) {
                foreach ($products as $productId => $product) {
                    if ($productName === $productId) return true;
                }
                return false;
            }

            if ($data === []) {
                call_user_func_array(array(new docesController, 'index'), []);
            } else if (!verifyProductInURIAndProducts($products, $productName)) {
                call_user_func_array(array(new errorController, 'index'), []);
            } else {
                $this->setTitle('Ver: '. $products[$productName]->__get('name') . ' - MIA');
                $this->setStyle('doces-info');
                $this->loadTemplate('sections/doces/info', ['products' => $products, 'productId' => $productName]);
            }
        }

        private function productsPath() {
            return $_SERVER['DOCUMENT_ROOT'].'/api/Models/products.php';
        }
    }
?>