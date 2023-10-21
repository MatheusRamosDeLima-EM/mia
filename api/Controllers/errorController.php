<?php 
    class errorController extends Controller {
        public function index() {
            $this->setStyle('error');
            $this->loadTemplate('error');
        }
    }
?>