<?php 
    class errorController extends Controller {
        public function index() {
            $this->__set('style', 'error');
            $this->loadTemplate('error');
        }
    }
?>