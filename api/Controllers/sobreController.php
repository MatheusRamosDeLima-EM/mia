<?php 
    class sobreController extends Controller {
        public function index() {
            $this->__set('style', 'sobre');
            $this->loadTemplate('sections/sobre');
        }
    }
?>