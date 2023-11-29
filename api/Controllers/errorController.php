<?php 
    class errorController extends Controller {
        public function index() {
            $this->setTitle('Erro 404 - MIA');
            $this->setStyle('error');
            $this->loadTemplate('error');
        }
    }
?>