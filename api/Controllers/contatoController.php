<?php
    require realpath(dirname(__FILE__)."../Core/Controller.php");

    class contatoController extends Controller {
        public function index() {
            $this->loadTemplate('sections/contato');
        }
    }
?>