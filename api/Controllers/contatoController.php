<?php
    class contatoController extends Controller {
        public function index() {
            $this->defineStylesheet('contato');
            $this->loadTemplate('sections/contato');
        }
    }
?>