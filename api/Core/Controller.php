<?php 
    class Controller {
        public $data;

        public function __construct() {
            $this->data = array();
        }

        public function loadTemplate(string $view_name, $model_data = array()) {
            $this->data = $model_data;

            require_once "Views/template.php";
        }

        public function loadViewOnTemplate(string $view_name, $model_data = array()) {
            if (isset($model_data)) extract($model_data);
            require_once "Views/pages/$view_name.php";
        }
    }
?>