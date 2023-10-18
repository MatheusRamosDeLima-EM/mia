<?php
    class homeController extends Controller {
        public function index() {
            $this->loadTemplate('sections/home');
        }
    }
?>