<?php
    class homeController extends Controller {
        public function index() {
            $this->loadTemplate('home');
            $this->setTitle('MIA - Loja de doces');
            $this->setStyle('home');
        }
    }
?>