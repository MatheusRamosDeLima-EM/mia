<?php
    class homeController extends Controller {
        public function index() {
            $this->defineStylesheet('home');
            $this->loadTemplate('sections/home');
        }
    }
?>