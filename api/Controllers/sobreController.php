<?php 
    class sobreController extends Controller {
        public function index() {
            $this->setStyle('sobre');
            $this->loadTemplate('sections/sobre');
        }
    }
?>