<?php
    class Product {
        private string $name;
        private float $price;
        private string $img;
        private string $description;

        public function __construct(string $name, float $price, string $img, string $description) {
            // $this->attr = $attr;
            $this->__set('name', $name);
            $this->__set('price', $price);
            $this->__set('img', $img);
            $this->__set('description', $description);
        }

        public function __get($attr) {
            return $attr? $this->$attr : '';
        }
        
        public function __set($attr, $value) {
            $this->$attr = $value;
        }
    };
?>