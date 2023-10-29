<?php 
    class sobreController extends Controller {
        public function index() {
            $this->setTitle('Sobre nós - MIA');
            $this->setStyle('sobre');
            $this->loadTemplate('sobre');
        }
    }
?>