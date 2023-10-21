<?php 
    class sobreController extends Controller {
        public function index() {
            $this->defineStylesheet('sobre');
            $this->loadTemplate('sections/sobre');
        }
    }
?>