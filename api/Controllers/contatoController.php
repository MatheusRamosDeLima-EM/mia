<?php
    class contatoController extends Controller {
        public function index() {
            $this->loadTemplate('contato');
            $this->setTitle('Nos contate - MIA');
            $this->setStyle('contato');
        }
    }
?>