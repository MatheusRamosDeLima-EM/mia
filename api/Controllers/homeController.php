<?php
    require realpath(dirname(__FILE__)."../Core/Controller.php");
    
    class homeController extends Controller {
        public function index() {
            $this->loadTemplate('sections/home');
        }
    }
?>