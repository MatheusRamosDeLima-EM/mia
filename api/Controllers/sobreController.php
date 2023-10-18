<?php 
    require realpath(dirname(__FILE__)."/../Core/Controller.php");

    class sobreController extends Controller {
        public function index() {
            $this->loadTemplate('sections/sobre');
        }
    }
?>