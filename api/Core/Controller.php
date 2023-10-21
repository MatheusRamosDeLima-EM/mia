<?php 
    class Controller {
        private $data;
        private string $style;

        public function __construct() {
            $this->data = array();
        }

        protected function loadTemplate(string $view_name, $model_data = array()) {
            $this->data = $model_data;

            require_once $_SERVER['DOCUMENT_ROOT'].'/api/Views/template.php';
        }

        protected function loadViewOnTemplate(string $view_name, $model_data = array()) {
            if (isset($model_data)) extract($model_data);
            require_once $_SERVER['DOCUMENT_ROOT']."/api/Views/pages/$view_name.php";
        }
        
        public function getData() {
            return $this->data;
        }

        public function getStyle() {
            return $this->style;
        }

        protected function setStyle(string $value) {
            $this->style = $value;
        }
    }
?>