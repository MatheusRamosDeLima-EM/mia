<?php 
    class sobreController extends Controller {
        public function index() {
            $this->loadTemplate('sobre');
            $this->setTitle('Sobre nós - MIA');
            $this->setStyle('sobre');
        }
    }
?>