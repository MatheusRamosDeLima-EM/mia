<?php
    class homeController extends Controller {
        public function index() {
            $this->setTitle('MIA - Loja de doces');
            $this->setStyle('home');
            $this->loadTemplate('sections/home');
        }
    }
?>