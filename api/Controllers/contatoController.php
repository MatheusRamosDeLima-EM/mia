<?php
    class contatoController extends Controller {
        public function index() {
            $this->setStyle('contato');
            $this->loadTemplate('sections/contato');
        }
    }
?>