<?php
    class contatoController extends Controller {
        public function index() {
            $this->__set('style', 'contato');
            $this->loadTemplate('sections/contato');
        }
    }
?>