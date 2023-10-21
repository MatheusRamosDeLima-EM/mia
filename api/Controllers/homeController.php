<?php
    class homeController extends Controller {
        public function index() {
            $this->__set('style', 'home');
            $this->loadTemplate('sections/home');
        }
    }
?>