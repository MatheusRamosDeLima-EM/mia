<?php
    class homeController extends Controller {
        public function index() {
            $this->setStyle('home');
            $this->loadTemplate('sections/home');
        }
    }
?>