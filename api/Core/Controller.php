<?php 
    class Controller {
        private $data;
        private string $title;
        private string $style;
        private string $script;

        public function __construct() {
            $this->data = array();
            $this->script = "";
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

        public function getTitle() {
            return $this->title;
        }

        protected function setTitle(string $value) {
            $this->title = $value;
        }

        public function getStyle() {
            return $this->style;
        }

        protected function setStyle(string $value) {
            $this->style = $value;
        }
        
        public function getScript() {
            return $this->script;
        }

        protected function setScript(string $value) {
            $this->script = $value;
        }
    }
?>