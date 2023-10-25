<?php
    class contatoController extends Controller {
        public function index() {
            $this->setTitle('Nos contate - MIA');
            $this->setStyle('contato');
            $this->loadTemplate('sections/contato');
        }
    }
?>