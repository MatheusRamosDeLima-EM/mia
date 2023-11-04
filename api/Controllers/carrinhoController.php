<?php 
    class carrinhoController extends Controller {
        public function index() {
            $this->setTitle('Carrinho - MIA');
            $this->setStyle('carrinho');
            $this->loadTemplate('carrinho');
        }
    }
?>