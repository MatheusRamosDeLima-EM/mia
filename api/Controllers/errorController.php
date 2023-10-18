<?php 
    require realpath(dirname(__FILE__)."../Core/Controller.php");

    class errorController extends Controller {
        public function index() {
            $this->loadTemplate('error');
        }
    }
?>