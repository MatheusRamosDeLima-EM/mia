<?php 
    class errorController extends Controller {
        public function index() {
            $this->loadTemplate('error');
            $this->setTitle('Erro 404 - MIA');
            $this->setStyle('error');
        }
    }
?>