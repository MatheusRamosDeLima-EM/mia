<?php 
    class errorController extends Controller {
        public function index() {
            $this->defineStylesheet('error');
            $this->loadTemplate('error');
        }
    }
?>